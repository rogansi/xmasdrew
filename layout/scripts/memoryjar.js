$(init);
function init(){
	$("#formTest").load("users/picForm.html");
	$("#loginTest").load("users/loginForm.html");
	
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
$.post("users/memorylist.php",function(data){
	$("#test").html(data);
});
}
function testPHPfunction(){
$.ajax({
    		type: "POST",
            url: "users/testfunction.php",
            data: {}
    	}).done(function(result){
    		$("#test").html(result);
    	});
}
function setMemory(memTitle){
    	$.ajax({
    		type: "POST",
            url: "users/singlememory.php",
            data: {'title':memTitle}
    	 }).done(function(result){
    		$("#test").html(result);
    	});
}
//loads all public functions as well as those of the user
function loadPublicMemories(){
	$.ajax({
    		type: "POST",
            url: "users/loadPublicMemories.php",
            data: {}
    	}).done(function(result){
    		$("#test").html(result);
    	});
}
function listMemorys(){
    	$.ajax({
    		type: "POST",
            url: "users/memorylist.php",
            data: {}
    	}).done(function(result){
    		$("#test").html(result);
    	});
}
//loads comments entered about a memory
function loadcomments(memID){
	$.ajax({
    		type: "POST",
            url: "users/commentlist.php",
            data: {"memID":memID}
    	}).done(function(result){
    		$("#test").html(result);
    	});
}
//loads ui to enter a new comment
function setupComment(memID){
	$.ajax({
    		type: "POST",
            url: "users/commentsUI.php",
            data: {"memID":memID}
    	}).done(function(result){
    		$("#test").html(result);
    	});
}
//sends data for comments to be inserted
function enternewcomment(memID){
	var commentTitle = $("#insertCommentTitle").val();
	var commentBody = $("#insertCommentBody").val();
	$.ajax({
    		type: "POST",
            url: "users/insertComment.php",
            data: {"memID":memID,"title":commentTitle,"body":commentBody}
    	}).done(function(result){
    		$("#test").html(result);
    	});
}
function loadPicForm(){
	$("#test").load("users/picForm.html");
}
function addPhoto2(){
	
}
//Logs a user in
function userLogIn(){
	var memberUname = $("#memberUsername").val();
	
	var memberPW = $("#memberPassword").val();
	
	$.ajax({
    		type: "POST",
            url: "users/usrLogin.php",
            data: {'memUName':memberUname,'memPW':memberPW}
    	}).done(function(result){
    		if(result != "Invalid"){
    		    $("#userNav").load("layout/userhome.php");
    		}else{
    		    alert("Invalid");
    		}
    	});
}
//updates a memory in the database
function updatememory(memID){
	var newTitle =$("#editMeTitle").val();
	var newBody =$("#editMeBody").val();
	$.ajax({
    		type: "POST",
            url: "users/updateMemory.php",
            data: {'title':newTitle,'body':newBody,'memID':memID}
    	}).done(function(result){
    		$("#test").html(result);
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
            url: "users/addmemory.php",
            data: {'title':memTitle,'body':memBody,'year':memYear,'picture':memPic,'public':memPublic}
    	}).done(function(result){
    		$("#test").html(result);
    	});
}
//Loads a memory in a form that is editable
function editMemory(memTitle){
    	$.ajax({
    		type: "POST",
            url: "users/editMemory.php",
            data: {'editTitle':memTitle}
    	 }).done(function(result){
    		$("#test").html(result);
    	});
}
//loads a single memory in read only form
function singleMemory(singleTitle){
	$.ajax({
    		type: "POST",
            url: "users/singlememory.php",
            data: {'singleTitle':singleTitle,'title':singleTitle}
    	 }).done(function(result){
    		$("#test").html(result);
    	});
}
function addPhoto(){
	$("#interactive").load("../xmasdrew/plupload-2.1.0/examples/custom.php");
}
