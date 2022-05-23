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
    var i =0;

     const mapContainer = document.getElementById('map'), // 지도를 표시할 div 
		mapOption = {
      center: new kakao.maps.LatLng(datas[0].x, datas[0].y), // 지도의 중심좌표
      level: 5 // 지도의 확대 레벨
    };

    const map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다
    
	datas.map((data) => {
        const markers =[];
		const marker = new kakao.maps.Marker({
            map: map,
			position: new kakao.maps.LatLng(data.x, data.y),
            title: data.id

		})

        const infowindow = new kakao.maps.InfoWindow({
            content:'<div>'+data.id+'</div>' // 인포윈도우에 표시할 내용
        });
        kakao.maps.event.addListener(marker, 'mouseover', makeOverListener(map, marker, infowindow));
        kakao.maps.event.addListener(marker, 'mouseout', makeOutListener(infowindow));
        markers.push(marker);

        function makeOverListener(map, marker, infowindow) {
            return function() { 
                infowindow.open(map, marker);
            };
        }
        
        // 인포윈도우를 닫는 클로저를 만드는 함수입니다 
        function makeOutListener(infowindow) {
            return function() {
                infowindow.close();
            };
        }

        kakao.maps.event.addListener(marker, 'click', function() {  
            marker.setClickable(true);   
            for (let i = 0; i < markers.length; i++) {
                if (marker[i]==this.marker) {
                    var gets = markers[i].getTitle();
                    location.replace('http://isc963.dothome.co.kr/front/map/map.php?items='+ gets)
                    
                }
                
            }            
    });

    kakao.maps.event.addListener(map, 'click', function() {    
        marker.setClickable(true); 
});



	})
    console.log(datas);


});

