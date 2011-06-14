<?php $this->renderc('template/header'); ?>
<title>TerryX - Super Admin Home</title>
<link rel="stylesheet" href="global/css/blog.css" type="text/css" media="screen" />
<link rel="stylesheet" href="global/css/green_form.css" type="text/css" media="screen" />

</head>
<script type="text/javascript">
  $(function(){
   
    $('.sidenav').each(function(){
      var thisSideNav = this;
  
      $(this).children('h4').click(function(){
 
        $(thisSideNav).children('ul').slideToggle('500',  'linear');
      });
      
    });
   
    $('#article_form').submit(function(){
      $.post('article/create_article', $(this).serialize(),
      function(data){
        console.log(data);
      });
      return false;
    });
    
    $('#loader').remove();
  });
</script>
<body>
  <div id="loader"></div>
  <div id="header">
    <!--    <div id="logo"></div>
        <div id="navbar">
          <a href="super_admin" id="home" class="active">Home</a>
          <a href="contact" id="contact">Contact</a>
          <a href="about" id="about">About</a>
          <a href="#" id="resource">Resources</a>
          <a href="logout">Logout</a>
        </div>
        <div class="clear"></div>-->
  </div>
  <div id="wrapper">
    <div id="sidebar1">
      <h3>Blog Article</h3>
      <div class="sidenav">
        <h4>Users</h4>
        <ul id="userLink">
          <li>
            <a href="create_user">Add new</a>
          </li>
          <li>
            <a href="manage_user">Manage user</a>
          </li>
        </ul>
      </div>


      <div class="sidenav">
        <h4>Article</h4>
        <ul id="articleLink">
          <li>
            <a href="create_user">Add new</a>
          </li>
          <li>
            <a href="finance">Manage article</a>
          </li>

        </ul>
      </div>
    </div>
    <div id="container">
      <div id="logo"></div>
      <div id="content">
        <div id="progress"></div>
        <img src="../../img/add.png" alt="" width="16px" height="16px" />

        Welcome to my website
        <div class="blog_box">
          <h2>First Blog post</h2>
          This is 1st post.
        </div>
        <form id="article_form" class="green_form">
          <label for="article_name">Title</label>
          <input type="text" id="article_name" name="article_name" class="title" /></br>
          <label for="tag">Tag</label>
          <select name="tag">
            <option value="">Please select a tag</option>
            <?php foreach ($data as $tag): ?>
              <option value="<?php echo $tag->tag_id; ?>"> <?php echo $tag->name; ?> </option>
            <?php endforeach; ?>
          </select></br></br>
          <textarea id="body" name="body" rows="10" cols="70" placeholder="Type your content here.."></textarea>
          </br>
          <input type="submit" value="Post" />
        </form>
      </div>
    </div>
    <div id="sidebar2">
      <div id="searchbar">
        <form id="search_form">
          <input type="text" id="search" name="search" placeholder="Search" />

        </form>
      </div>

      <div id="search_result">
      </div>
    </div>
    <?php $this->renderc('template/footer'); ?>