 (function ($) {
    "use strict";

        initDonutChart('donut', 'donut-chart');
        getMorris('area', 'area-chart');
        getMorrisBar('bar', 'bar-chart');
       

})(jQuery);         



/*==================================================================
============== GetMorris Js  =======================================
 */
function getMorris(type, element) {
    if (type === 'area') {
        Morris.Area({
            element: element,
            data: [{
                period: '2017 Q5',
                Sales: 3480,
                Revenue: 2102,
                Profit: 2365
            }, {
                    period: '2013 Q3',
                    Sales: 4215,
                    Revenue: 4460,
                    Profit: 2028                
                },{
                    period: '2014 Q1',
                    Sales: 4215,
                    Revenue: 4460,
                    Profit: 2028
                }, {
                    period: '2015 Q4',
                    Sales: 6412,
                    Revenue: 5713,
                    Profit: 3450
                },{
                    period: '2016 Q3',
                    Sales: 4215,
                    Revenue: 4460,
                    Profit: 2028                
                },{
                    period: '2017 Q5',
                    Sales: 4215,
                    Revenue: 4460,
                    Profit: 2028                
                }],
            xkey: 'period',
            ykeys: ['Sales', 'Revenue', 'Profit'],
            labels: ['Sales', 'Revenue', 'Profit'],
            pointSize: 3,
            hideHover: 'auto',
            lineColors: ['rgba(222, 96, 96,0.3)', 'rgba(83, 180, 196, 0.3)', 'rgba(76, 84, 87, 0.3)']
        });
    }
}




/* ===============================================================================
==========================  Donut Chart ==========================================
*/

function initDonutChart(type, element) {
     if (type === 'donut') {
        Morris.Donut({
            element: element,
            data: [{
                label: 'Mobile',
                value: 40
            }, {
                label: 'Tablet',
                value: 25
            }, {
                label: 'Desktop',
                value: 25
            }, {
                label: 'Laptop',
                value: 10        
            }],
            colors: ['#50c9c3', '#ff7eb3', '#50c9c3', '#f58787'],
            formatter: function (y) {
                return y + '%'
            }
        });
    }
}
// //===============================================================================
var data = [], totalPoints = 110;
function getRandomData() {
    if (data.length > 0) data = data.slice(1);

    while (data.length < totalPoints) {
        var prev = data.length > 0 ? data[data.length - 1] : 50, y = prev + Math.random() * 10 - 5;
        if (y < 0) { y = 0; } else if (y > 100) { y = 100; }

        data.push(y);
    }

    var res = [];
    for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]]);
    }

    return res;
}



/* ===============================================================================
==========================  Bar Chart ==========================================
*/
function getMorrisBar(type, element) {
    if (type === 'bar') {
        Morris.Bar({
            element: element,
            data: [
                  { y: '2014', a: 50, b: 90},
                  { y: '2015', a: 65,  b: 75},
                  { y: '2016', a: 50,  b: 50},
                  { y: '2017', a: 75,  b: 60},
                  { y: '2018', a: 80,  b: 65},
                  { y: '2019', a: 90,  b: 70},
                  { y: '2020', a: 100, b: 75},
                  { y: '2021', a: 115, b: 75},
                  { y: '2022', a: 120, b: 85},
                  { y: '2023', a: 145, b: 85},
                  { y: '2024', a: 160, b: 95}
                ],

            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Series A', 'Series B'],
            pointSize: 3,
            hideHover: 'auto',
            stacked:'true',
            resize: true,
            barColors:['rgba(222, 96, 96,0.3)', 'rgba(83, 180, 196, 0.3)'],
           
        });
    }
}

