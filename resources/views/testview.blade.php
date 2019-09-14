<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
</head>
<body>
<center>
    <h1>Laravel Toasr Notifications</h1>
    <form action="submitdata" method="post">
        <input type="hidden" name="_token" value ="{{ csrf_token() }}">
        <span>Name:</span><input id="name_id" name="testname"><br /><br />
        <button type="submit">Submit</button>
    </form>
</center>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript"></script>
<script>
    @if(Session::has('message'))
        let type="{{Session::get('alert-type', 'info')}}";
        switch(type){
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif
</script>
</body>
</html>
