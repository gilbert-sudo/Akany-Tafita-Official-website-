
function edit_row(no)
{
 document.getElementById("edit_button"+no).style.display="none";
 document.getElementById("save_button"+no).style.display="block";
 var titleRow=document.getElementById("title_row"+no);
 var dateRow=document.getElementById("date_row"+no);
 var timeRow=document.getElementById("time_row"+no);
 var descRow=document.getElementById("desc_row"+no);
 var imgRow= document.getElementById('img_row'+no);
 var title=titleRow.innerHTML;
 var date=dateRow.innerHTML;
 var time=timeRow.innerHTML;
 var desc=descRow.innerHTML;
 var src = document.getElementById("event_img"+no+"").src;
 titleRow.innerHTML="<input type='text' id='edit_title"+no+"' value='"+title+"'>";
 dateRow.innerHTML="<input type='text' id='edit_date"+no+"' value='"+date+"'>";
 timeRow.innerHTML="<input type='time' id='edit_time"+no+"' value='"+time+"'>";
 descRow.innerHTML="<input type='text' id='edit_desc"+no+"' value='"+desc+"'>";
 imgRow.innerHTML = "<img id='blah' style='display:block;' src='"+src+"'  width='100px' height='100px' /><div><span class='btn btn-file btn-success'><span class='fileupload-new'>Select image</span><input type='file' class='img'  id='blah"+no+"' onchange='showPreview(event);'></span></div>"
 console.log('you can edit it');

}
var sendRequest = async (endPoint) => {
  const request = await fetch(endPoint);
  const data = await request.json();
  console.log(data);
  return data;
}
function save_row(no, sendRequest)
{
  sendRequest("index.php?controller=events&task=update").then(data =>{ console.log(data);}).catch(err =>{console.log(err);});
 var titleNew=document.getElementById("edit_title"+no).value;
 var dateNew=document.getElementById("edit_date"+no).value;
 var timeNew=document.getElementById("edit_time"+no).value;
 var descNew=document.getElementById("edit_desc"+no).value;
 var srcNew = document.getElementById("blah").src;
 document.getElementById("title_row"+no).innerHTML=titleNew;
 document.getElementById("date_row"+no).innerHTML=dateNew;
 document.getElementById("time_row"+no).innerHTML=timeNew;
 document.getElementById("desc_row"+no).innerHTML=descNew;
 document.getElementById("img_row"+no).innerHTML= "<img id='event_img"+no+"' src='"+srcNew+"' width='100px' height='100px'>"
 document.getElementById("edit_button"+no).style.display="block";
 document.getElementById("save_button"+no).style.display="none";
} 

function delete_row(no)
{
 document.getElementById("row"+no+"").outerHTML="";
}                                            
 function showPreview(event){
    if(event.target.files.length > 0){
    
      var file = event.target.files[0];
      var fileName =file.name;
      var src = URL.createObjectURL(file);
      var preview =document.getElementById("blah");
      preview.src = src;
      preview.style.display = "block";
      var change = $('#selectImg');
      change.innerHTML = "change";
     
    }
  }
//   fetch()=var sendRequest = (endPoint)=>{
//     return new Promise((resolve, reject)=>{ 
//       const request = new XMLHttpRequest();
//   request.addEventListener(readystatechange, ()=>{
//     if(request.readyState === 4 && request.status === 200){
//       const data = JSON.parse(request.responseText);
//       console.log(data);
//       resolve(data);
//     }
//     else
//     {
//       console.log("error");
//       reject(Error("error"));
//     }
//   })
//   request.open('GET', endPoint, true);
//   request.send();
// }
//     )
 
// }
// sendRequest('http://localhost:3000/events').then(data =>{ console.log(data);}).catch(err =>{console.log(err);});

var navlink = document.getElementsByClassName('nav-link');
for( let i = 0; i<navlink.length; i++ ){
   navlink[i].addEventListener('click', function(){
     $(this).addClass('active');
    });
  }
  var page = window.location.href;
 page = page.substr((page.lastIndexOf('/') + 1));
switch(page){
   
    case "index.php?controller=Home&task=index":
        $('#home').addClass('active');
        break;
    case "index.php?controller=Events&task=addEvent":
      $("#event").addClass("active");
      $('#event1').addClass('active');
      $('#link1').css('display', 'block');
        break;
    case "index.php?controller=Events&task=index":
       $("#event").addClass("active");
        $('#event2').addClass('active');
        $('#link1').css('display','block');
        break;
      case "index.php?controller=donation&task=ask":
        $("#gift").addClass('active');
        $("#gift1").addClass('active');
        $('#link2').css('display', 'block');
        break;
      case "index.php?controller=donation&task=index":
        $("#gift").addClass('active');
        $("#gift2").addClass('active');
        $('#link2').css('display', 'block');
        break;
        case "index.php?controller=blog&task=addBlog":
          $("#blog").addClass('active');
          $("#blog1").addClass('active');
          $('#link5').css('display','block');
          break;
          case "index.php?controller=blog&task=manageBlog":
            $("#blog").addClass('active');
            $("#blog2").addClass('active');
            $('#link5').css('display', 'block');
            break;
            case "index.php?controller=responsible&task=addResponsible":
              $("#responsible").addClass('active');
              $("#responsible1").addClass('active');
              $('#link3').css('display','block');
              break;
              case "index.php?controller=responsible&task=manageResponsible": 
                $("#responsible").addClass('active');
                $("#responsible2").addClass('active');
                $('#link3').css('display','block');
                break
                case "index.php?controller=admin&task=general":
                  $("#settings").addClass('active');
                  $("#setting1").addClass('active');
                  $('#link6').css('display', 'block');
                  break;
                  case "index.php?controller=contact&task=index":
                    $("#settings").addClass('active');
                    $("#setting2").addClass('active');
                    $('#link6').css('display','block');
                    break;
                    case "index.php?controller=witness&task=addWitness":
                      $("#witness").addClass('active');
                      $("#witness1").addClass('active');
                      $('#link4').css('display','block');
                      break;
                      case "index.php?controller=witness&task=manageWitness":
                        $("#witness").addClass('active');
                        $("#witness2").addClass('active');
                        $('#link4').css('display','block');
                        break;
                        case "index.php?controller=mailbox&task=index":
                          $("#email").addClass('active');
                          break;
                          default: 
                          $("#home").addClass('active');

}
for(var i = 0; i<3; i++){
document.getElementById('spanEye')[i].addEventListener('click', 
function () {
  var x = document.getElementById("password"+i);
  var show_eye = document.getElementById("show_eye"+i);
  var hide_eye = document.getElementById("hide_eye"+i);
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}
)}