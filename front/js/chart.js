var chart = bb.generate({
  data: {
    columns: [
			/*
      ["data1", 30, 200, 100, 400, 150, 250],
      ["data2", 130, 100, 140, 200, 150, 50],
      ["data3", 130, 150, 200, 300, 200, 100]
			*/
    ],
    type: "bar"
  },
  bar: {
    width: {
      ratio: 0.5
    }
  },
  bindto: "#barChart"
});

fetch("http://isc963.dothome.co.kr/api/router/user/visualization.php")
.then((res) => res.json())
.then((datas) => {
	datas.map((data) => {
		chart.load({
			columns: [
				[data.name, data.price]
			]
		});
	})
});
/*
setTimeout(function () {
  chart.load({
    columns: [
      ["data3", 130, -150, 200, 300, -200, 100]
    ]
  });
}, 1000);
*/