@if(session()->has('flash_message'))
	<script type="text/javascript">
	    swal({ 
	        title: "{{ session('flash_message.title') }}", 
	        text: "{{ session('flash_message.message') }}",
	        type: "{{ session('flash_message.level') }}",
	        animation: "slide-from-top",
	        timer: 1700,   
	        showConfirmButton: false
	    });
	</script>
@endif

@if(session()->has('flash_message_overlay'))
	<script type="text/javascript">
	    swal({ 
	        title: "{{ session('flash_message.title') }}", 
	        text: "{{ session('flash_message.message') }}",
	        type: "{{ session('flash_message.level') }}",
	        confirmButtonText: "Okay"
	    });
	</script>
@endif