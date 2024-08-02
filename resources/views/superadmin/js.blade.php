<script type="text/javascript">
    function confirmation(event){
        event.preventDefault();
        var urlToRedirect = event.currentTarget.getAttribute('href');

        console.log(urlToRedirect);

        swal({
            title:"Are You Sure to Delete This",
            text:"This delete will be permenent",
            icon:"warning",
            buttons:true,
            dangerMode:true,
        })
        .then((willDelete)=>{
            if(willDelete)
            {
                window.location.href=urlToRedirect;
            }
        });
        
    }
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"> </script>
<script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
<script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('admincss/js/charts-home.js') }}"></script>
<script src="{{ asset('admincss/js/front.js') }}"></script>