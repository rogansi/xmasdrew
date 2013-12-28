$(init);
function init(){
	$("#formTest").load("picForm.html");
	$("#loginTest").load("loginForm.html");
	
}

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
function testPHPfunction(){
$.ajax({
    		type: "POST",
            url: "testfunction.php",
            data: {}
    	}).done(function(result){
    		$("#test").html(result);
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
//loads all public functions as well as those of the user
function loadPublicMemories(){
	$.ajax({
    		type: "POST",
            url: "loadPublicMemories.php",
            data: {}
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
function loadPicForm(){
	$("#test").load("picForm.html");
}
function addPhoto2(){
	
}
//Logs a user in
function userLogIn(){
	var memberUname = $("#memberUsername").val();
	
	var memberPW = $("#memberPassword").val();
	
	$.ajax({
    		type: "POST",
            url: "usrLogin.php",
            data: {'memUName':memberUname,'memPW':memberPW}
    	}).done(function(result){
    		if(result != "Invalid"){
    		    $("#userNav").load("../layout/userhome.php");
    		}else{
    		    alert("Invalid");
    		}
    	});
}
//adds a new memory into the database
function addNewMem(){
	var memPublic;
	var memTitle =$("#memoryTitle").val();
	alert(memTitle);
	var memBody =$("#memoryText").val();
	alert(memBody);
	var memYear =$("#memoryYear").val();
	alert(memYear);
	var memPic =$("#memoryPic").val();
	alert(memPic);
	if($("#public").val()=="on"){
		memPublic =1;
	}else{
		memPublic =0;
	}
	alert(memPublic);
	$.ajax({
    		type: "POST",
            url: "addmemory.php",
            data: {'title':memTitle,'body':memBody,'year':memYear,'picture':memPic,'public':memPublic}
    	}).done(function(result){
    		$("#test").html(result);
    	});
}
//Loads a memory in a form that is editable
function editMemory(memTitle){
    	$.ajax({
    		type: "POST",
            url: "editMemory.php",
            data: {'editTitle':memTitle}
    	 }).done(function(result){
    		$("#test").html(result);
    	});
}
//loads a single memory in read only form
function singleMemory(singleTitle){
	$.ajax({
    		type: "POST",
            url: "singlememory.php",
            data: {'singleTitle':singleTitle,'title':singleTitle}
    	 }).done(function(result){
    		$("#test").html(result);
    	});
}
function addPhoto(){
	$("#interactive").load("../plupload-2.1.0/examples/custom.php");
}
