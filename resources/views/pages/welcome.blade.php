@extends('layouts.app')

@section('content')
<div class="bg-gray-100 pt-20 lg:pt-28 w-full mx-auto">
  <header class="bg-gray-100 px-8 py-4">
    
    <div class="container mx-auto max-w-4xl">
      <div class="flex justify-center md:justify-around items-center">
        <div class="">
          <h1 class="sm:block text-teal-500 font-bold leading-tight text-4xl">Hola! Soy Eddy <br> Rufino</h1>
          <p class="mt-3 leading-relaxed sm:text-lg md:text-xl xl:text-lg text-gray-600">Desarrollo aplicaciones web <br> modernas.</p>
          <a class="rounded-lg inline-block mt-4 px-4 md:px-5 xl:px-4 py-3 md:py-4 xl:py-3 bg-teal-500 hover:bg-teal-600 md:text-lg xl:text-base text-white font-semibold leading-tight shadow-md" href="#">Conoce más</a>
        </div>

        <div class="">
          <img class="hidden sm:hidden md:block " style="height: 300px" src='img/illustration.svg' alt="Hombre sentado"></img>
        </div>
      </div>
    </div>
    
  </header>
  <div class="bg-center bg-repeat-x block image-header" style="height: 190px; background-size: 4322px 190px; background-image: url(&quot;data:image/svg+xml,%3Csvg viewBox='0 0 4322 190' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23F7FAFC' d='M1 0h4320v190H1z' /%3E%3Cpath d='M1441 190H1V95s202.817-45 360-45 360 45 360 45 202.817 45 360 45c157.18 0 360-45 360-45v95z' fill='%23fff' /%3E%3Cpath d='M721 95c-.217.976-.216.976-.214.977l.007.001.028.007.111.024.441.097c.389.085.969.212 1.732.377 1.525.33 3.783.814 6.711 1.43 5.857 1.23 14.398 2.989 25.137 5.099a2518.171 2518.171 0 0 0 86.945 15.475C912.268 129.74 1002.33 141 1081 141v-2c-78.51 0-168.451-11.24-238.786-22.487a2518.276 2518.276 0 0 1-86.875-15.463 1956.06 1956.06 0 0 1-25.111-5.095 1180.206 1180.206 0 0 1-8.427-1.803l-.438-.096-.11-.024-.027-.006-.007-.002c-.002 0-.002 0-.219.976zm360 46c78.67 0 168.73-11.26 239.1-22.513a2519.232 2519.232 0 0 0 86.95-15.475c10.74-2.11 19.28-3.868 25.13-5.1 2.93-.615 5.19-1.1 6.72-1.43.76-.164 1.34-.29 1.73-.376.19-.043.34-.075.44-.097.05-.01.08-.019.11-.024a.228.228 0 0 1 .03-.007v-.001c.01 0 .01 0-.21-.977l-.22-.976-.01.002-.02.006c-.03.005-.06.013-.11.024l-.44.096-1.73.376c-1.52.33-3.77.812-6.7 1.427-5.85 1.23-14.38 2.987-25.11 5.095-21.46 4.217-51.71 9.84-86.87 15.463C1249.45 127.76 1159.51 139 1081 139v2zM1 95c.217.976.217.976.219.976a.12.12 0 0 1 .007-.002l.027-.006.11-.024.438-.096 1.726-.376c1.523-.33 3.776-.812 6.7-1.427A1958.54 1958.54 0 0 1 35.34 88.95a2517.83 2517.83 0 0 1 86.875-15.463C192.549 62.24 282.488 51 361 51v-2c-78.671 0-168.732 11.26-239.102 22.513a2520.39 2520.39 0 0 0-86.945 15.474 1960.08 1960.08 0 0 0-25.137 5.1 1190.357 1190.357 0 0 0-8.884 1.904l-.111.024-.028.007-.007.001c-.002 0-.003 0 .214.977zm360-44c78.512 0 168.451 11.24 238.786 22.487a2517.73 2517.73 0 0 1 86.875 15.463 1956.06 1956.06 0 0 1 25.111 5.095 1180.206 1180.206 0 0 1 8.427 1.803l.438.096.11.024.027.006.007.002c.002 0 .002 0 .219-.976s.216-.976.214-.977l-.007-.001-.028-.007a52.997 52.997 0 0 1-.111-.024l-.441-.097c-.389-.085-.969-.212-1.732-.377-1.525-.33-3.783-.814-6.711-1.43a1963.63 1963.63 0 0 0-25.137-5.1 2520.12 2520.12 0 0 0-86.945-15.474C529.732 60.26 439.671 49 361 49v2z' fill='%23EDF2F7' /%3E%3Cpath d='M721 95c-.11.994-.109.994-.108.994h.007a4.033 4.033 0 0 0 .139.016l.44.049 1.731.188c1.524.165 3.781.407 6.708.714 5.855.616 14.394 1.495 25.131 2.55a4859.582 4859.582 0 0 0 86.929 7.736C912.338 112.873 1002.37 118.5 1081 118.5v-2c-78.55 0-168.521-5.623-238.864-11.247a4862.892 4862.892 0 0 1-86.892-7.733 3742.387 3742.387 0 0 1-25.118-2.548 2277.852 2277.852 0 0 1-8.431-.901l-.438-.049-.11-.012-.028-.003h-.007c-.001 0-.002 0-.112.993zm360 23.5c78.63 0 168.66-5.627 239.02-11.253 35.19-2.813 65.46-5.626 86.93-7.736 10.74-1.055 19.28-1.934 25.13-2.55a2033.552 2033.552 0 0 0 8.44-.902l.44-.049.11-.012.03-.003h.01L1441 95l-.11-.994-.01.001-.03.003-.11.012-.44.048c-.38.043-.96.106-1.72.189-1.53.164-3.78.406-6.71.713-5.85.615-14.38 1.494-25.11 2.548-21.47 2.11-51.73 4.921-86.9 7.733-70.34 5.624-160.31 11.247-238.86 11.247v2zM1 95c.11.994.111.994.113.994l.006-.001.028-.003.11-.012a832.34 832.34 0 0 1 2.167-.236c1.523-.165 3.777-.407 6.702-.714 5.851-.615 14.385-1.494 25.118-2.548a4862.105 4862.105 0 0 1 86.892-7.733C192.479 79.123 282.448 73.5 361 73.5v-2c-78.631 0-168.662 5.627-239.023 11.253a4863.709 4863.709 0 0 0-86.929 7.736 3741.098 3741.098 0 0 0-25.13 2.55 2267.42 2267.42 0 0 0-8.44.902l-.44.049-.11.012-.029.003H.892c-.001.001-.002.001.108.995zm360-21.5c78.552 0 168.521 5.623 238.864 11.247a4861.657 4861.657 0 0 1 86.892 7.733 3742.387 3742.387 0 0 1 25.118 2.548 2277.852 2277.852 0 0 1 8.431.901l.438.049.11.012.028.003h.007c.001 0 .002 0 .112-.993.11-.994.109-.994.108-.994h-.007a4.033 4.033 0 0 0-.139-.016l-.44-.049-1.731-.188c-1.524-.165-3.781-.407-6.708-.714a3745.292 3745.292 0 0 0-25.131-2.55 4863.637 4863.637 0 0 0-86.929-7.736C529.662 77.127 439.631 71.5 361 71.5v2z' fill='%23EDF2F7' /%3E%3Cpath d='M721 95c-.406.914-.405.914-.403.915l.007.003.028.013c.025.01.063.027.112.05l.441.193c.39.171.971.424 1.734.755 1.527.66 3.786 1.628 6.715 2.86a1159.053 1159.053 0 0 0 25.146 10.204 1439.3 1439.3 0 0 0 86.972 30.959C912.132 163.461 1002.25 186 1081 186v-2c-78.43 0-168.315-22.461-238.639-44.952a1439.162 1439.162 0 0 1-86.849-30.916 1160.302 1160.302 0 0 1-25.103-10.187 718.783 718.783 0 0 1-6.696-2.852 417.12 417.12 0 0 1-2.162-.943l-.109-.048a1.004 1.004 0 0 1-.034-.015c-.002 0-.002-.001-.408.913zm360 91c78.75 0 168.87-22.539 239.25-45.048a1440.417 1440.417 0 0 0 86.97-30.959c10.74-4.222 19.29-7.74 25.15-10.204 2.93-1.232 5.18-2.2 6.71-2.86.76-.33 1.34-.584 1.73-.755.2-.085.35-.15.45-.194.05-.022.08-.038.11-.05l.03-.012v-.003s.01-.001-.4-.915l-.41-.913v.003a.14.14 0 0 0-.03.012c-.03.01-.06.027-.11.048-.1.043-.24.107-.44.192-.39.17-.96.422-1.72.75a754.49 754.49 0 0 1-6.7 2.853c-5.85 2.459-14.37 5.971-25.1 10.187a1440.735 1440.735 0 0 1-86.85 30.916C1249.31 161.539 1159.43 184 1081 184v2zM1 95c.406.914.406.914.408.913l.006-.003.028-.012.11-.048.436-.192a716.557 716.557 0 0 1 8.421-3.603c5.847-2.459 14.376-5.971 25.103-10.187a1438.123 1438.123 0 0 1 86.849-30.915C192.685 28.46 282.566 6 361 6V4c-78.749 0-168.868 22.539-239.248 45.047a1440.043 1440.043 0 0 0-86.972 30.96A1160.442 1160.442 0 0 0 9.634 90.21c-2.93 1.232-5.188 2.2-6.715 2.86a407.475 407.475 0 0 0-2.175.949l-.112.05-.028.012-.007.003c-.002 0-.003.001.403.915zM361 6c78.434 0 168.315 22.461 238.639 44.953a1438.217 1438.217 0 0 1 86.849 30.915 1161.015 1161.015 0 0 1 25.103 10.187 718.783 718.783 0 0 1 6.696 2.852 417.12 417.12 0 0 1 2.162.943l.109.048a1.004 1.004 0 0 1 .034.015c.002 0 .002.001.408-.913.406-.914.405-.914.403-.915l-.007-.003-.028-.013c-.025-.01-.063-.027-.112-.05l-.441-.193c-.39-.171-.971-.424-1.734-.755a729.681 729.681 0 0 0-6.715-2.86 1159.897 1159.897 0 0 0-25.146-10.204 1440.245 1440.245 0 0 0-86.972-30.96C529.868 26.54 439.749 4 361 4v2z' fill='%23EDF2F7' /%3E%3Cpath d='M2881 190H1441V95s202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45v95z' fill='%23fff' /%3E%3Cpath d='M721 95c-.316.949-.315.95-.313.95l.007.002.028.01.112.036.44.146a862.55 862.55 0 0 0 8.447 2.71 1402.428 1402.428 0 0 0 25.142 7.652 1778.488 1778.488 0 0 0 86.96 23.216C912.199 146.603 1002.29 163.5 1081 163.5v-2c-78.47 0-168.382-16.853-238.71-33.722a1777.19 1777.19 0 0 1-86.861-23.19 1399.482 1399.482 0 0 1-25.106-7.641 856.118 856.118 0 0 1-8.424-2.703l-.437-.144-.11-.037-.027-.009-.007-.002c-.002 0-.002 0-.318.948zm360 68.5c78.71 0 168.8-16.897 239.18-33.778a1782.519 1782.519 0 0 0 86.96-23.216c10.74-3.166 19.28-5.804 25.14-7.652a766.601 766.601 0 0 0 8.45-2.71l.44-.146c.05-.016.08-.028.11-.037a.172.172 0 0 1 .03-.009v-.002s.01-.001-.31-.95l-.32-.948v.002a.163.163 0 0 0-.03.01c-.03.007-.06.02-.11.036-.1.032-.25.08-.44.144-.39.127-.96.316-1.72.563-1.53.493-3.78 1.218-6.7 2.14-5.85 1.844-14.38 4.479-25.11 7.641a1777.105 1777.105 0 0 1-86.86 23.19C1249.38 144.647 1159.47 161.5 1081 161.5v2zM1 95c.316.949.316.949.318.948l.007-.002.027-.01a61.574 61.574 0 0 1 .547-.18 866.032 866.032 0 0 1 8.424-2.703 1404.167 1404.167 0 0 1 25.106-7.64 1776.776 1776.776 0 0 1 86.861-23.19C192.618 45.352 282.527 28.5 361 28.5v-2c-78.71 0-168.801 16.897-239.177 33.778a1778.831 1778.831 0 0 0-86.96 23.216 1405.54 1405.54 0 0 0-25.142 7.652 867.48 867.48 0 0 0-8.447 2.71 178.697 178.697 0 0 0-.587.194c-.002 0-.003.001.313.95zm360-66.5c78.473 0 168.382 16.853 238.71 33.722a1776.52 1776.52 0 0 1 86.861 23.19 1401.624 1401.624 0 0 1 25.106 7.641 856.118 856.118 0 0 1 8.424 2.703l.437.144.11.037.027.009.007.002c.002 0 .002 0 .318-.948.316-.949.315-.95.313-.95l-.007-.002-.028-.01-.112-.036a862.55 862.55 0 0 0-8.887-2.856 1406.453 1406.453 0 0 0-25.142-7.652 1778.897 1778.897 0 0 0-86.96-23.216C529.801 43.397 439.71 26.5 361 26.5v2z' fill='%234FD1C5' /%3E%3Cpath d='M4321 190H2881V95s202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45v95z' fill='%23fff' /%3E%3Cpath d='M1441 95s202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45 202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45' stroke='%23EDF2F7' stroke-width='2' /%3E%3Cpath d='M1441 95s202.82-22.5 360-22.5S2161 95 2161 95s202.82 22.5 360 22.5S2881 95 2881 95s202.82-22.5 360-22.5S3601 95 3601 95s202.82 22.5 360 22.5S4321 95 4321 95' stroke='%23EDF2F7' stroke-width='2' /%3E%3Cpath d='M1441 95s202.82-90 360-90 360 90 360 90 202.82 90 360 90 360-90 360-90 202.82-90 360-90 360 90 360 90 202.82 90 360 90 360-90 360-90' stroke='%23EDF2F7' stroke-width='2' /%3E%3Cpath d='M1441 95s202.82-67.5 360-67.5S2161 95 2161 95s202.82 67.5 360 67.5S2881 95 2881 95s202.82-67.5 360-67.5S3601 95 3601 95s202.82 67.5 360 67.5S4321 95 4321 95' stroke='%234FD1C5' stroke-width='2' /%3E%3C/svg%3E%0A&quot;);"></div>
</div>
@endsection