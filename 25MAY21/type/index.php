<script src="jquery-3.6.0.min.js"></script>
<script>
fun1();
fun2();
function fun1(){
	jQuery.ajax({
		url:'get1.php',
		async:false,
		success:function(result){
			console.log('fun1');
		}
	});
}
function fun2(){
	jQuery.ajax({
		url:'get2.php',
		success:function(result){
			console.log('fun2');
		}
	});
}
</script>