$(function() {
    "use strict";
  
  var c3LineChart = c3.generate({
    bindto: '#c3-line-chart',
    data: {
      columns: [
        ['data1', 110, 200, 100, 400, 150, 250],
        ['data2', 200, 500, 400, 40, 15, 25]
      ]
    },
    color: {
        pattern: ['#5e72e4','#2dce89','#11cdef']
    },
    padding: {
        top: 0,
        right:0,
        bottom:30,
        left: 0,
    }
  });

    
  setTimeout(function() {
    c3LineChart.load({
      columns: [
        ['data1', 230, 190, 300, 500, 300, 400]
      ]
    });
  }, 1000);

  setTimeout(function() {
    c3LineChart.load({
      columns: [
        ['data3', 130, 150, 200, 300, 200, 100]
      ]
    });
  }, 1500);

  setTimeout(function() {
    c3LineChart.unload({
      ids: 'data1'
    });
  }, 2000);

  var c3SplineChart = c3.generate({
    bindto: '#c3-spline-chart',
    data: {
      columns: [
        ['data1', 30, 200, 100, 400, 150, 250],
        ['data2', 130, 100, 140, 200, 150, 50]
      ],
      type: 'spline'
    },
    color: {
        pattern: ['#ff2fa0','#fb6340','#172b4d']
    },
    padding: {
        top: 0,
        right:0,
        bottom:30,
        left: 0,
    }
  });

  
  var c3BarChart = c3.generate({
    bindto: '#c3-bar-chart',
    data: {
      columns: [
        ['data1', 30, 200, 100, 400, 150, 250],
        ['data2', 130, 100, 140, 200, 150, 50]
      ],
      type: 'bar'
    },
    color: {
        pattern: ['#5e72e4','#11cdef','#f5365c']
    },
    padding: {
        top: 0,
        right:0,
        bottom:30,
        left: 0,
    },
    bar: {
      width: {
        ratio: 0.7 // this makes bar width 50% of length between ticks
      }
    }
  });

  setTimeout(function() {
    c3BarChart.load({
      columns: [
        ['data3', 130, -150, 200, 300, -200, 100]
      ]
    });
  }, 1000);

  var c3StepChart = c3.generate({
    bindto: '#c3-step-chart',
    data: {
      columns: [
        ['data1', 300, 350, 300, 0, 0, 100],
        ['data2', 130, 100, 140, 200, 150, 50]
      ],
      types: {
        data1: 'step',
        data2: 'area-step'
      }
    },
    color: {
        pattern: ['#5e72e4','#ff2fa0','#ff2fa0']
    },
    padding: {
        top: 0,
        right:0,
        bottom:30,
        left: 0,
    }
  });


  var c3PieChart1 = c3.generate({
    bindto: '#c3-pie-chart1',
    data: {
      // iris data from R
      columns: [
        ['data1', 30],
        ['data2', 120],
      ],
      type: 'pie',
      onclick: function(d, i) {
        console.log("onclick", d, i);
      },
      onmouseover: function(d, i) {
        console.log("onmouseover", d, i);
      },
      onmouseout: function(d, i) {
        console.log("onmouseout", d, i);
      }
    },
    color: {
        pattern: ['#5e72e4','#2dce89','#11cdef']
    },
    padding: {
        top: 0,
        right:0,
        bottom:30,
        left: 0,
    }
  });

  setTimeout(function() {
    c3PieChart1.load({
      columns: [
        ["Income", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2],
        ["Outcome", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3],
        ["Revenue", 2.5, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8],
      ]
    });
  }, 1500);

  setTimeout(function() {
    c3PieChart1.unload({
      ids: 'data1'
    });
    c3PieChart1.unload({
      ids: 'data2'
    });
  }, 2500);

  var c3PieChart2 = c3.generate({
    bindto: '#c3-pie-chart2',
    data: {
      // iris data from R
      columns: [
        ['data1', 30],
        ['data2', 120],
      ],
      type: 'pie',
      onclick: function(d, i) {
        console.log("onclick", d, i);
      },
      onmouseover: function(d, i) {
        console.log("onmouseover", d, i);
      },
      onmouseout: function(d, i) {
        console.log("onmouseout", d, i);
      }
    },
    color: {
        pattern: ['#5e72e4','#2dce89','#11cdef']
    },
    padding: {
        top: 0,
        right:0,
        bottom:30,
        left: 0,
    }
  });

  setTimeout(function() {
    c3PieChart2.load({
      columns: [
        ["Income", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2],
        ["Outcome", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3],
        ["Revenue", 2.5, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8],
      ]
    });
  }, 1500);

  setTimeout(function() {
    c3PieChart2.unload({
      ids: 'data1'
    });
    c3PieChart2.unload({
      ids: 'data2'
    });
  }, 2500);
  var c3DonutChart = c3.generate({
    bindto: '#c3-donut-chart',
    data: {
      columns: [
        ['data1', 30],
        ['data2', 120],
      ],
      type: 'donut',
      onclick: function(d, i) {
        console.log("onclick", d, i);
      },
      onmouseover: function(d, i) {
        console.log("onmouseover", d, i);
      },
      onmouseout: function(d, i) {
        console.log("onmouseout", d, i);
      }
    },
    color: {
        pattern: ['#21ad21','#ccc','#A0522D']
    },
    padding: {
        top: 0,
        right:0,
        bottom:30,
        left: 0,
    },
    donut: {
      title: "Mode"
    }
  });

  setTimeout(function() {
    c3DonutChart.load({
      columns: [
        ["Rail", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2],
        ["Truck", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3],
        ["Barge", 2.5, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8],
      ]
    });
  }, 1500);

  setTimeout(function() {
    c3DonutChart.unload({
      ids: 'data1'
    });
    c3DonutChart.unload({
      ids: 'data2'
    });
  }, 2500);


});

