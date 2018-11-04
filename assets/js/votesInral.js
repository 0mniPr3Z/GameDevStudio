
if(!votes_init_funcs){
	var votes_init_funcs = true;
    var votes_urlimg = new Array();
    var votes_urlimgh = new Array();
    var votes_auto = new Array();

    function votes_hover(id,i){
    	for(j=1;j<=5;j++){
        	if(j<=i){
	        	document.getElementById('votes_'+id+'_img_'+j).src=votes_urlimgh[id];
            }else{
	        	document.getElementById('votes_'+id+'_img_'+j).src=votes_urlimg[id];
            }
        }
    }
    function votes_unhover(id){
    	for(j=1;j<=5;j++){
        	if(j<=votes_auto[id]){
	        	document.getElementById('votes_'+id+'_img_'+j).src=votes_urlimgh[id];
            }else{
	        	document.getElementById('votes_'+id+'_img_'+j).src=votes_urlimg[id];
            }
        }
    }
    function votes_voter(id,i){
	    votes_auto[id] = i;
        var js_effets=document.createElement('script');
        js_effets.setAttribute('type', 'text/javascript');
        js_effets.setAttribute('src', 'http://services.supportduweb.com/votes/voter-'+id+'-'+i+'.js');
        document.getElementsByTagName('script')[0].parentNode.insertBefore(js_effets,document.getElementsByTagName('script')[0]);
    }
}
votes_urlimg['42913'] = 'images/star.png';
votes_urlimgh['42913'] = 'images/star.png';
var votes_codesimgs = '';
votes_auto[42913] = 1;
for(i=1;i<=5;i++){
	votes_codesimgs +=
	'<img src="'+votes_urlimg['42913']+'" alt="'+i+'" onclick="votes_voter(42913, '+i+');" onmouseover="votes_hover(42913, '+i+');" onmouseout="votes_unhover(42913);" id="votes_42913_img_'+i+'" />';
}
document.getElementById('votes_42913').innerHTML = votes_codesimgs+'<br /><span id="votes_42913_txt">Moy. 2/5(2 votes)</span>';
votes_unhover(42913);