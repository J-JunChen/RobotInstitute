$(function () {
  $.ajax({
    url:'analyze',
    success:function (msg) {
        // alert(msg);
        var json = JSON.parse(msg);


         // 一周内每日pv表格数据
         var pvData = {

             labels: ["第一天", "第二天", "第三天", "第四天", "第五天","第六天","第七天"],
             datasets: [
                {
                    label: "每天的PV值",
                    fillColor: "rgba(54, 162, 235, 0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#17a2b8",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 80, 81, 56, 90, 80]
                }
              ]
       
          };

         // 各专业人数表格数据
        var majorData = [
        {
            value: json['electron'],
            color:"#F7464A",
            highlight: "#FF5A5E",
            label: "电子工程"
        },
        {
            value: json['mechanical'],
            color: "#515151",
            highlight: "#636363",
            label: "机械工程"
        },
        {
            value: json['automation'],
            color: "#FDB45C",
            highlight: "#FFC870",
            label: "自动化"
        },
         {
            value: json['software'],
            color: "#00EEEE",
            highlight: "#00FFFF",
            label: "软件工程"
        }

      ];

    // 用户类型表格数据
          var userTypeData = [
            {
                value: json['teacher'],
                color: "#8A2BE2",
                highlight: "#7A67EE",
                label: "教师"
            },
            {
                value: json['student'],
                color: "#00EEEE",
                highlight: "#00FFFF",
                label: "学生"
            }

          ];

    //性别表格数据
          var genderData = [
           {
                value: json['male'],
                color:"#1874CD",
                highlight: "#1E90FF",
                label: "Male"
            },
            {
                value: json['female'],
                color: "#FF34B3",
                highlight: "#FF83FA",
                label: "Female"
            },

          ];


          var ctxMajor = $("#pieChartDemo").get(0).getContext("2d");
          var pieChart = new Chart(ctxMajor).Pie(majorData);

           var ctxPV = $("#lineChartDemo").get(0).getContext("2d");
          var lineChart = new Chart(ctxPV).Line(pvData);


          
          var ctxUserType = $("#doughnutChartDemo").get(0).getContext("2d");
          var doughnutChart = new Chart(ctxUserType).Doughnut(userTypeData);

          var ctxGender = $("#polarChartDemo").get(0).getContext("2d");
          var polarChart = new Chart(ctxGender).PolarArea(genderData);

    },

    error:function () {
        alert('加载失败，请刷新页面！');
    }

  });
})
