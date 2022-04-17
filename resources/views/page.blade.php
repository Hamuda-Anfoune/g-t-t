@extends('layouts.app')

@section('content')
<div>
    <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" onclick="getData()">
        Get the data
    </button>
</div>
<script type="text/javascript">
    function getData(){

        console.log("fetching...");

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

