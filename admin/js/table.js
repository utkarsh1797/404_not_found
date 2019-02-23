$(document).ready(function(){
            $("button").click(function(){
              var number_of_rows = $('#rows').val();
              var number_of_cols = 1;
              var table_body = '<table border="1">';
              for(var i=0;i<number_of_rows;i++){
                table_body+='<tr>';

                for(var j=0;j<number_of_cols;j++){
                    table_body +='<td>';
                    table_body +='Table data';
                    table_body +='</td>';

                }
                table_body+='</tr>';
              }

                table_body+='</table>';
               $('#tableDiv').html(table_body);
            });
        });