/*!
* tableToD3Chart();
* Author: Joe Watkins - joe@emergeinteractive.com
*
* Scrape the dom for data and create C3/D3 based charts
*
* Defaults:
*   chartTitleWrapper = the element wrapping text for chart label
*   chartType = line, pie, donut, bar, spline, scatter etc. - see C3 docs
*   useDom = true/false - if you don't want to scrape dom and want to define data use false
*   data = an array or json of data to work with eg [['Jackie', 15,13,10],['Beth', 8,10,22],['Sam',10,5,14]];
*   chartLabel = define label if useDom = false and using data
*/
(function($){

    $.fn.tableToD3Chart = function(options) {

        var defaults = {
          wrapper: this,
          chartTitleWrapper : "caption",
          chartType: "donut",
          useDom: true,
          data : [],
          chartLabel : "Chart Label"
        }

        var options =  $.extend(defaults, options);
        var o = options;

        var getChartData = {

          title : function(target){
            if(o.useDom){
              var $this = $(target),
                  caption = $this.find(o.chartTitleWrapper).text();
                  return caption;
            }else{
              var caption = o.chartLabel;
              return caption;
            }

          },

          tableData : function(target){
            if(o.useDom){
              var $this = $(target),
                  $rows = $this.find("tr").not(":first"),
                  rowData = [];

                  $rows.each(function(){
                    var $dataCells = $(this).children(),
                        tmpData = [];
                        $dataCells.each(function(){
                          tmpData.push($(this).text());
                        });
                        rowData.push(tmpData)
                  });

                  return rowData;
            }else{
              var rowData = o.data;
              return rowData;
            }

          } // tableData

        }

        var chart = c3.generate({
            bindto: o.wrapper.selector,
            data: {
              columns: getChartData.tableData(o.chartDataTable),
              type: o.chartType
            },
            donut : {
              title : getChartData.title(o.chartDataTable)
            }
        });

    }; // $.fn

}(jQuery));
