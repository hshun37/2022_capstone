(() => {
	//map 만들기
	var mapContainer = document.getElementById("map"), // 지도를 표시할 div
	mapOption = {
		center: new kakao.maps.LatLng(35.909734775051504, 128.81796715333087), // 지도의 중심좌표
		level: 5, // 지도의 확대 레벨
		mapTypeId: kakao.maps.MapTypeId.ROADMAP, // 지도종류
	};
  // 지도를 생성한다
  const map = new kakao.maps.Map(mapContainer, mapOption);

	// 마커 클러스터러를 생성합니다
	const clusterer = new kakao.maps.MarkerClusterer({
		map: map, // 마커들을 클러스터로 관리하고 표시할 지도 객체
		averageCenter: true, // 클러스터에 포함된 마커들의 평균 위치를 클러스터 마커 위치로 설정
	});
	
	function displayMarker(locPosition) {
    // 지도에 마커와 인포윈도우(말풍선)를 표시하는 함수입니다
    // 마커를 생성합니다
    const marker = new kakao.maps.Marker({
      map: map,
      position: locPosition,
    });

    // 지도 중심좌표를 접속위치로 변경합니다
    map.setCenter(locPosition);
  }

	const geolocationT = () => {
    // geolocation true 기능 함수
    // GeoLocation을 이용해서 접속 위치를 얻어옵니다
    navigator.geolocation.getCurrentPosition((position) => {
      const { latitude, longitude } = position.coords;
      const locPosition = new kakao.maps.LatLng(latitude, longitude), // 마커가 표시될 위치를 geolocation으로 얻어온 좌표로 생성합니다
        message = '<div style="padding:5px;">여기에 계신가요?!</div>'; // 인포윈도우(말풍선)에 표시될 내용입니다

      // 마커와 인포윈도우(말풍선)를 표시합니다
      displayMarker(locPosition, message);
    });
  };

  const geolocationF = () => {
    // geolocation false 인경우 기능 함수
    const locPosition = new kakao.maps.LatLng(33.450701, 126.570667),
      message = "geolocation을 사용할수 없어요..";

    displayMarker(locPosition, message);
  };

	// 인포윈도우(말풍선)를 표시하는 클로저를 만드는 함수입니다
	const makeOverListener = (map, marker, infowindow) => {
    return function () {
      infowindow.open(map, marker);
    };
  };

	// 인포윈도우(말풍선)를 닫는 클로저를 만드는 함수입니다
  const makeOutListener = (infowindow) => {
    return function () {
      infowindow.close();
    };
  };

	// 마우스 이동
	const makeClickListener = (x, y) => {
		return function () {
			const position = new kakao.maps.LatLng(x, y)
			map.setCenter(position);
		};
	};

	const init = async () => {
    // 서버 통신
    const base_url = "http://isc963.dothome.co.kr/api/router/house/location_point copy.php" + window.location.search;
    const getData = async () => {
      const res = await fetch(base_url);
      return res.text();
    };

		//마커 저장배열
		const markers = new Array();
    const db = JSON.parse(await getData());
		
		//데이터 확인
		const test = new Array();
		test.push(db);

		if (navigator.geolocation) {
      geolocationT();
			//console.log("1");
    } else {
      // HTML5의 GeoLocation을 사용할 수 없을때 마커 표시 위치와 인포윈도우(말풍선) 내용을 설정합니다
      geolocationF();
			//console.log("2");
    }
		console.log(db[0].x, db[0].y, db[0].id);

		db.map((data) => {
      // 맵 중앙 이동 - 오류 있음
      //map.setCenter(
      //  new kakao.maps.LatLng(data.x, data.y)
      //)

			//지도에 마커를 생성하고 표시한다.
			const marker = new kakao.maps.Marker({
				//position: new kakao.maps.LatLng(positions[0], positions[1]),
				position: new kakao.maps.LatLng(data.x, data.y),
					map: map, //마커를 표시할 지도 객체
			});

			//말풍선
			const infowindow = new kakao.maps.InfoWindow({
        content: data.id,
      });

			//이벤트 리스너
			kakao.maps.event.addListener(
        marker,
        "mouseover",
        makeOverListener(map, marker, infowindow)
      );
			kakao.maps.event.addListener(
				marker,
				"click",
				makeClickListener(data.x, data.y)
			);
      kakao.maps.event.addListener(
        marker,
        "mouseout",
        makeOutListener(infowindow)
      );

			markers.push(marker);
		});

		clusterer.addMarkers(markers);
		kakao.maps.event.addListener(clusterer, 'clusterclick', function(cluster) {
			// 지도의 현재 영역을 얻어옵니다 
      var bounds = map.getBounds();
   
    
			// 영역의 남서쪽 좌표를 얻어옵니다 
      var swx = bounds.getSouthWest().getLat(); 
      var swy = bounds.getSouthWest().getLng(); 
      var nex = bounds.getNorthEast().getLat(); 
      var ney = bounds.getNorthEast().getLng(); 
      location.replace('http://isc963.dothome.co.kr/front/map/testmap.php?locate_x='+swx+'&locate_y='+swy+'&locate_nx='+nex+'&locate_ny='+ney)
    });

		map.setCenter(
			new kakao.maps.LatLng(db[0].x, db[0].y)
		)
	};
	init();
})();