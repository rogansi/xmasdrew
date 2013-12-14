
function setupLayout(){
	$(".memlink").hover(function(){
		$(this).css("cursor","pointer")
		$(this).switchClass("memlink","memlink2");
	},function(){
		$(this).switchClass("memlink2","memlink");
	});
}
function loadMemList(){
$.post("memorylist.php",function(data){
	$("#test").html(data);
});
}
    function setMemory(memTitle){
    	$.ajax({
    		type: "POST",
            url: "singlememory.php",
            data: {'title':memTitle}
    	}).done(function(result){
    		$("#test").html(result);
    	});
    }

function listMemorys(){
    	$.ajax({
    		type: "POST",
            url: "memorylist.php",
            data: {}
    	}).done(function(result){
    		$("#test").html(result);
    	});
}
