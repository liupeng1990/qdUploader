$(function(){

$('#sortable').find('.delete').bind('click',function(){
	$(this).parent().parent().remove();
});

$('#uploadAdd').bind('click',function(){
});

});