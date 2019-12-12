<!--JavaScript Load-->
<script type="text/babel">

	var basic = {
		documentReady : [],
		modalData : [],
		pushReady : function(fun){
			this.documentReady.push(fun);
		},
		url : function(){
			return '<?= base_url() ?>/'+str;
		},
		openModal : function(modalName,value=null){
			var data=[];
			for(var i=1;i<arguments.length;i++){
				data.push(arguments[i]); 
			}
			this.modalData[modalName] = data;
			$('#'+modalName).modal('show');
		}
	};
	
	//註冊ready事件
	$(document).ready(function() {
		basic.documentReady.forEach(element => {
			element();
		});
	} );

</script>