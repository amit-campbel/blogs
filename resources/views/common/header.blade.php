<div class="msg-container">
    <div class="msg">
        <p></p>
        <a class="btn-close" onclick="msgHide()">X</a>
    </div>
</div>
<header>
    <div id="site_header">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 logo-container">
                    <span>B</span>LOGs
                </div>
                <div class="col-sm-4 pull-right">
                    @if (Auth::check())
                        <a href="/home">Home</a> | 
                        <a href="/posts/create">Create Post</a> 
                        <div class="pull-right">
                            <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Sign out
                            </a>
                        </div>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @else
                        <a href="/login">Login</a> | <a href="/register">Register</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>