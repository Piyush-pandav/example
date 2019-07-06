<style>
table {
  margin: 15px 0;
 
  table-layout: fixed;
  width: 20%; /* must have this set */
}
html {
  background: #ccc;
}
body {
  max-width: 400px;
  margin: 0 auto;
  background: white;
  padding: 10px;
}
.cut-off th:nth-child(1) {
  width: 75%;
}
.cut-off td:nth-child(1) {
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}
.cut-off th:nth-child(2) {
  width: 25%;
}
.cut-off td:nth-child(2) span {
  display: block;
  
}



</style>


<table class="cut-off">
  
  <tr>
    <td>Supercalifragilisticexpialidocious Something something something something attrotious</td>
    
  </tr>
  <tr>
    <td>This little piggy went to market. This little piggy went to bed.</td>
   
  </tr>
  <tr>
    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis amet molestiae earum accusantium nostrum eveniet ipsum soluta ut reprehenderit vel incidunt laboriosam dolorum maiores! Earum deserunt sit unde? Sunt voluptatem!</td>
    
  </tr>
</table>