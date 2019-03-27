/*----------------------------
        PerfectScrollbar
    ------------------------------ */
  //var ps = new PerfectScrollbar('.perfectScrollbar');



/*----------------------------
        Add Post Form
    ------------------------------ */
$('#post').on('change', function () {
        $("#Marketplace").css('display', (this.value == '4') ? 'block' : 'none');
        $("#Career").css('display', (this.value == '2') ? 'block' : 'none');
    });


/*----------------------------
        Multi Select
    ------------------------------ */

$('.tag .ui.dropdown').dropdown({
	allowAdditions: true
});


/*----------------------------
        NewsFeed 
    ------------------------------ */
/*$("#NewsFeed,#NewsFeedsHome").owlCarousel({
  items:1,
  itemsDesktop:[1000,1],
  itemsDesktopSmall:[979,1],
  itemsTablet:[768,1],
  itemsMobile:[650,1],
  pagination:true,
  navigation:false,
  slideSpeed:1000,
  autoPlay:true
});*/


/*----------------------------
        Pending List
    ------------------------------ */
var overFlow = document.getElementById("overFlow");
var withcalc = document.getElementById("PendingRequest");
var withcalc100 = document.getElementById("PendingRequest");
  function PendingRequestOpn() {
    overFlow.classList.add("overflow");    
    if(screen.width<767){
      withcalc100.classList.add("withcalc100");
    }else{
      withcalc.classList.add("withcalc");
    }
  }
  function PendingRequestClose() {
    overFlow.classList.remove("overflow");
    withcalc.classList.remove("withcalc");
    withcalc100.classList.remove("withcalc100");          
  }




  
 
  