<div class="col-lg-4 col-md-4 col-sm-4 blog-border">
    <!-- SEARCH-FORM START -->
    <div class="search-form sidebar-p">
        <h3 class="blog-right-title">Search Blog</h3>
        <form action="#">
            <input type="text" placeholder="Search"/>
        </form>
    </div>
    <!-- SEARCH-FORM END -->



    <!-- USER-LOGIN START -->
    <div class="user-login sidebar-p">
        <h3 class="blog-right-title"> User Login</h3>
        <form action="{{route('login')}}" method="POST">
            {{csrf_field()}}
            <p>
                <span>Email</span>
                <input type="email" name="email" placeholder="username here..."/>
            </p>

            <p>
                <span>Password</span>
                <input type="password" name="password" placeholder="password here..."/>
            </p>

            <p>
                <span class="remember-me">Remember me</span>
                <input type="checkbox" />
            </p>
            <input type="submit" value="Login" class="readon" name="Submit">
            <ul class="forgot-pass">
                <li><a href="#"><i class="fa fa-share-square-o"></i>Forgot your password?</a></li>
                <li><a href="#"><i class="fa fa-share-square-o"></i>Forgot your username?</a></li>
                <li><a href="/register"><i class="fa fa-share-square-o"></i>Create an account</a></li>
            </ul>
        </form>
    </div>
    <!-- USER-LOGIN END -->

</div>