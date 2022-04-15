
// var mapContainer = document.getElementById('map'), // 지도를 표시할 div  
//     mapOption = { 
//         center: new kakao.maps.LatLng(35.8396648,128.5737281), // 지도의 중심좌표
//         level: 3 // 지도의 확대 레벨
//     };

// var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

// fetch("http://isc963.dothome.co.kr/api/router/house/location_point copy.php")
// 		.then((res) => res.json())
// 		.then((datas) => {
// 			datas.map((data) => {
//                 var num1=parseFloat(data.x);
//                 var num2=parseFloat(data.y);
//                 var positions =  new kakao.maps.LatLng(num1, num2);
// 			})
// 		});
 
    
// for (var i = 0; i < positions.length; i ++) {
    
//     // 마커 이미지의 이미지 크기 입니다
//     var imageSize = new kakao.maps.Size(24, 35); 
    
//     // 마커 이미지를 생성합니다     
    
//     // 마커를 생성합니다
//     var marker = new kakao.maps.Marker({
//         map: map, // 마커를 표시할 지도
//         position: positions[i].latlng, // 마커를 표시할 위치
//       // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시됩니다
//      // 마커 이미지 
//     });
// }

// var dataname = Array();
// var data_x =Array();
// var data_y=Array();
// var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
// mapOption = {
//         center: new kakao.maps.LatLng(35.8396648, 128.5737281), // 지도의 중심좌표
//         level: 5 // 지도의 확대 레벨
//     };

// var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

// // 마커를 생성합니다
// fetch("http://isc963.dothome.co.kr/api/router/house/testmovemap.php")
// .then((res) => res.json())
// .then((datas) => {
// 	datas.map((data) => {
//         dataname.push(data.names)
//         data_x.push(data.x)
//         data.y.push(data.y)
// 		var marker = new kakao.maps.Marker({
// 			position: new kakao.maps.LatLng(data.x, data.y),
// 		})
// 		marker.setMap(map);
// 	})
// });

// function clickreader(id){
//     for(i=0; dataname[i]<=dataname.length; i++){
//         if(id==dataname[i]){
//             var moveLatLon = new kakao.maps.LatLng(data_x[i], data_y[i]);
//         }

//     }
  
// }

// // 마커가 지도 위에 표시되도록 설정합니다
// // marker.setMap(map);
// // 일반 지도와 스카이뷰로 지도 타입을 전환할 수 있는 지도타입 컨트롤을 생성합니다
// var mapTypeControl = new kakao.maps.MapTypeControl();

// // 지도에 컨트롤을 추가해야 지도위에 표시됩니다
// // kakao.maps.ControlPosition은 컨트롤이 표시될 위치를 정의하는데 TOPRIGHT는 오른쪽 위를 의미합니다
// map.addControl(mapTypeControl, kakao.maps.ControlPosition.TOPRIGHT);

// // 지도 확대 축소를 제어할 수 있는  줌 컨트롤을 생성합니다
// var zoomControl = new kakao.maps.ZoomControl();
// map.addControl(zoomControl, kakao.maps.ControlPosition.RIGHT);

// 마커를 생성합니다

var data_php = new Array([],[]);
fetch("http://isc963.dothome.co.kr/api/router/house/testmovemap.php" + window.location.search)
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
    console.log(data_php)
});

var write_tag="";
for (var i = 0; i < data_php.length; i++) {
    write_tag =+ "<li id ="+data_php[i].name+", onclick='clickreader(this.id)'>" +
    "<ul>"+
      "<li>이름: "+data_php[i].name+data_php[i].detail_locate+"</li>" +
      "<li>가격: "+data_php[i].price+"</li>"+
      "<li>원/투룸: "+data_php[i].type+"</li>"+
      "<li>월/전세: "+data_php[i].type+"</li>"+
      "</ul>"+
    "</li>";
    
}

var writeplus_tag = document.getElementById('innertag');
writeplus_tag.innerHTML=write_tag;



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

function clickreader(id){
    for(i=0; i<data_php.length; i++){
        if(id==data_php[i]){
            var moveLatLon = new kakao.maps.LatLng(data_php[i], data_php[i]);
        }

    }
  
}



