@php
    $user = "Yashdeep";
    $fruits = [
        "Apple",
        "Banana",
        "PineApple",
        "Stawberry",
        "Grapes",
    ]
@endphp

<script>
    // let data = @json($user) ;
    // let data = {{Js::from($user)}} ;

    let data = {{Js::from($fruits)}}

    data.forEach(function(element){
        
        console.log(element);
    });

</script>