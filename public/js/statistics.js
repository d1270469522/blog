$(function () {
  $('#statistics').highcharts({
    chart: {

    },

    // 柱状图的标题
    title: {
      text: '数据统计图'
    },

    // x轴的坐标
    xAxis: {
      categories: ['05月', '06月', '07月', '08月', '09月', '10月']
    },
    tooltip: {
      formatter: function() {
        var s;
        if (this.point.name) { // the pie chart
          s = ''+
          this.point.name +': '+ this.y +' 11';
        } else {
          s = ''+
          this.x  +': '+ this.y;
        }
        return s;
      }
    },
    labels: {
      items: [{
        html: '扇形图',
        style: {
          left: '40px',
          top: '8px',
          color: 'black'
        }
      }]
    },
    series: [
        {
          type: 'column',
          name: '文章',
          data: [3, 5, 8, 5, 7, 2]
        }, {
          type: 'column',
          name: '评论',
          data: [2, 3, 7, 3, 6, 1]
        }, {
          type: 'column',
          name: '点赞',
          data: [2, 1, 3, 1, 2, 8]
        }, {
          type: 'spline',
          name: '平均值',
          data: [3, 2.67, 3, 6.33, 3.33, 4],
          marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
          }
        }, {
          type: 'pie',
          name: 'Total consumption',
          data: [
            {
              name: '注册量',
              y: 13,
              color: Highcharts.getOptions().colors[0] // Jane's color
            }, {
              name: '下单量',
              y: 23,
              color: Highcharts.getOptions().colors[1] // John's color
            }, {
              name: '通过量',
              y: 19,
              color: Highcharts.getOptions().colors[2] // Joe's color
            }
          ],
          center: [100, 80], //扇形图的偏移位置
          size: 100, // 扇形图的半径
          showInLegend: false,
          dataLabels: {
            enabled: false
          }
        }
    ]
  });
});
