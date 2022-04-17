@extends('layouts.app')

@section('content')
<div>
    <button onclick="getData()">Get the data</button>
</div>
<script type="text/javascript">
    function getData(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $(".btn-submit").click(function(e){
        
            e.preventDefault();
        
            var name = $("input[name=name]").val();
            var password = $("input[name=password]").val();
            var email = $("input[name=email]").val();
        
            $.ajax({
                type:'POST',
                url:"{{ route('download') }}",
                data:{name:name, password:password, email:email},
                success:function(data){
                    alert(data.success);
                }
            });
        
        });
    }
</script>
@endsection

