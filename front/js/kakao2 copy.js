// 마커를 생성합니다

var arrayPoint = new Array(288);

function setCenter() {           
    
    // 이동할 위도 경도 위치를 생성합니다 
    var moveLatLon = new kakao.maps.LatLng(38, 128);
        
        // 지도 중심을 이동 시킵니다
    return moveLatLon;
}

fetch("http://isc963.dothome.co.kr/api/router/house/location_point copy.php" + window.location.search)
.then((res) => res.json())
.then((datas) => {

     var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
		mapOption = {
      center: new kakao.maps.LatLng(datas[0].x, datas[0].y), // 지도의 중심좌표
      level: 5 // 지도의 확대 레벨
    };

    var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

	datas.map((data) => {

		var marker = new kakao.maps.Marker({
			position: new kakao.maps.LatLng(data.x, data.y),
		})
		marker.setMap(map);
	})


});







// 마커가 지도 위에 표시되도록 설정합니다
// marker.setMap(map);
// 일반 지도와 스카이뷰로 지도 타입을 전환할 수 있는 지도타입 컨트롤을 생성합니다
var mapTypeControl = new kakao.maps.MapTypeControl();

// 지도에 컨트롤을 추가해야 지도위에 표시됩니다
// kakao.maps.ControlPosition은 컨트롤이 표시될 위치를 정의하는데 TOPRIGHT는 오른쪽 위를 의미합니다
map.addControl(mapTypeControl, kakao.maps.ControlPosition.TOPRIGHT);


// 지도 확대 축소를 제어할 수 있는  줌 컨트롤을 생성합니다
var zoomControl = new kakao.maps.ZoomControl();
map.addControl(zoomControl, kakao.maps.ControlPosition.RIGHT);


