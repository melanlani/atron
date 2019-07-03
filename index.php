<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="assets/images/atron/logo-inverse.png" type="image/x-icon">
    <title>ATRON - Do It Easy And Achieve More.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    
    <link href="./main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <style type="text/css">
        .app-header__logo .logo-src{
            background: url(assets/images/atron/logo-inverse.png);
            width: 150px; height: 54px; margin-left: 22px
        }
        .hamburger-inner, .hamburger-inner::before, .hamburger-inner::after{
            background-color: #d41515;
        }
        .app-theme-white .app-footer .app-footer__inner, .app-theme-white .app-header{
            background: #ffffff;
        }
        .app-sidebar__heading{
            color: #bd0606;
        }
        .btn-danger{
            background-color: #ce0c0c;
        }
        .text-red {
            color: #ce0c0c;
        }
        .bg-red{
            background-color: #ce0c0c;
        }
        .badge-danger{
            background-color: #ce0c0c;
        }
        .btn-outline-danger:hover{
            background-color: #ce0c0c;
        }
    </style>
</head>
<body>
    
        <?php include('layout/header.php'); ?> 

        <div class="app-main"> 
            <?php include('menu.php'); ?> 
                <div class="app-main__outer">

                    <?php include 'main.php'; ?>

                    <?php include('layout/footer.php'); ?> 

                </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script>
<script>
  $(document).ready(function(){

    $("#filter_reg").on('change', function()
    {
    var value = $(this).val();
      $.ajax(
      {
        url: 'filter.php',
        type: 'POST',
        data: 'request='+value,
        beforeSend:function()
        {
          $("#table-container").html('Working On...')
        },
        success:function(data)
        {
          $("#table-container").html(data);
        },
      });
      $.ajax(
      {
        url: 'filter2.php',
        type: 'POST',
        data: 'request='+value,
        beforeSend:function()
        {
          $("#table-containers").html('Working On...')
        },
        success:function(data)
        {
          $("#table-containers").html(data);
        },
      });
    });
    $('#up').click(function(){
      $.ajax(
      {
        url: 'up.php',
        type: 'POST',
        data: 'up='+'up',
        beforeSend:function()
        {
          $("#table-status").html('Working On...')
        },
        success:function(data)
        {
          $("#table-status").html(data);
        },
      });
    });
    $('#down').click(function(){
      $.ajax(
      {
        url: 'down.php',
        type: 'POST',
        data: 'down='+'down',
        beforeSend:function()
        {
          $("#table-status").html('Working On...')
        },
        success:function(data)
        {
          $("#table-status").html(data);
        },
      });
    });
    $('#occ').click(function(){
      $.ajax(
      {
        url: 'occ.php',
        type: 'POST',
        data: 'occ='+50,
        beforeSend:function()
        {
          $("#table-status").html('Working On...')
        },
        success:function(data)
        {
          $("#table-status").html(data);
        },
      });
    });

  });
</script>
</body>
</html>
