 <header>
     <div>
         <ul style="color: blue;justify-content: center; align-items: center;display:flex">
             <li><a href="{{ route('welcome') }}">Home</a></li>
             <li><a href="{{ route('users.index') }}">Users</a></li>
             <li><a href="{{ route('products.index') }}">Products</a></li>
             <li><a href="{{ route('user_products.index') }}">User Products</a></li>
             <li><a href="{{ route('videos') }}">Videos</a></li>
             <li>
                 <form action="{{ route('logout') }}" method="POST">
                     @csrf
                     <button type="submit">Logout</button>
                 </form>
             </li>
         </ul>
     </div>
 </header>
