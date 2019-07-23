<!DOCTYPE html>
<html>

<head>
    <title>live voting app</title>
    <link rel="stylesheet" type="type\css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


</head>

<body>
    <div class="container">
        <br />
        <br />
        <br />
        <h2 align="center"> Live voting System </h2>
        <h4> Vote for your staff of the week
        </h4>
        <div class="row">
            <div class="col-md-6">
                <form method="post" action="" id="new_form">
                    <div class="radio">
                        <label>
                            <h4>

                                <input type="radio" class="vote_option" name="vote_option" value="O J"> O J

                            </h4>
                        </label>
                    </div>

                    <div class="radio">
                        <label>
                            <h4>
                                <input type="radio" class="vote_option" name="vote_option" value="ziks">
                                ziks
                            </h4>
                        </label>
                    </div>

                    <div class="radio">
                        <label>
                            <h4>
                                <input type="radio" class="vote_option" name="vote_option" value="bams">
                                bams
                            </h4>
                        </label>
                    </div>

                    <div class="radio">
                        <label>
                            <h4>
                                <input type="radio" class="vote_option" name="vote_option" value="ebuka">
                                ebuka
                            </h4>
                        </label>
                    </div>
                    <button type="submit" id="vote_button" class="btn btn-primary">submit</button>

                </form>
            </div>
        </div>
        <div class="col-md-6">
            <br />
            <br />
            <br />
            <br />
            <h4> Vote Result</h4>
            <div id="vote_result"></div>
        </div>
    </div>
    </div> -->

    </div>
    </div>
    </div>
</body>

</html>
<script>
// function pass_data()

$(document).ready(function(){

                fetch_vote_data()
                    function fetch_vote_data(){

                    $.ajax({
                    url:"vote_data.php",
                    method:"POST",
                    success:function(data)
                    {
                       $('#vote_result').html(data);
                    }
                })
            }

                $('#vote_button').on('submit',function(event){
                event.preventDefault();
                var vote_option = '';
                $('.vote_option').each(function(){
                if($(this).prop("checked")){
                    vote_option = $(this).val()
                }
                });

                if(vote_option != ''){
                $('#vote_button').attr('disabled' ,'disabled')
                {
                    var form_data = $(this).serialize();
                    $.ajax({
                        method:'post',
                        data:'form_data',
                        url:'vote.php',
                        success:function(data){
                        $('#vote_form')[0].reset()
                        $('#vote_button').attr('disabled' ,false)
                        fetch_vote_data();
                        alert ("vote submitted succesfuly ");
                        }
                    });
                }
            }
        });   
});  
 </script> 


<!-- fetch data from mysql and display in the sreen here--
     //  $(document).ready(function(){

    //  fetch_vote_data()

    //  function fetch_vote_data(){

    //  $.ajax({
    //  url:"vote_data.php",
    //  method:"POST",
    //  success:function(data)
    //  {
    //  $('#vote_result').html(data);
    //  }
    //  })
    //  }
      
     


     <!-- // //passing  the data through js into the vote file to be submitted into the db 

    // // $('#vote_button').on('submit', function (event) {
    // //     eventpreventDefault();
    // //     var vote_option = '';
    // //     $('.vote_option').each(function(){
    // //         if($(this).prop("checked")){
    // //             vote_option = $(this).val()
    // //         }
    // //     });

    // //     if(vote_option != ''){
    // //         $('#vote_button').attr('disabled' ,'disabled')
    // //         {
    // //             var d = getElementById('#vote_button')

    // //             var form_data = $(this).serialize; 
    // //         }
    // //         


    //         function myfunction(vote_option){
    //            vote_option = document.getElementsByClassName(vote_option)
                
    //                 if(vote_option != ''){
    //                     var btn = getElementById('#vote_button')
    //                     btn = vote_option.value
    //                 }
    //                 form_data = btn
    //             btn.onclick(function(){
    //                 data =btn.attr('disabled' , 'disabled')
    //                  $.ajax({
    //                  url: "vote.php",
    //                  method: "POST",
    //                  data : "data",
    //                  token: "_token()",
    //                  success:function(data){
    //                  $('#vote_form')[0].reset()
    //                  $('#vote_button').attr('disabled' ,false)
    //                  fetch_vote_data();
    //                  alert ("vote submitted succesfuly ");
    //                  }

    //             })

           

    //     })

    //     } 
    //  -->




<!-- 