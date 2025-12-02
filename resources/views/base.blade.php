<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    @yield('links')
</head>
<body>
    <header class="pt-4">
        <div class="container-xl d-flex flex-row justify-content-between">
              <div style="position: relative; top: -10px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-list d-xl-none d-block" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                </svg>
              </div>
              <img src="static/images/logo.png" alt="" class="img-thumbnail border-0" style="height: 70px; width: 225px; position: relative; top: -10px;">
              <div class="search_bar d-none d-xl-block">
                <div class="input-group mb-3" style="width: 530px; height: 50px;">
                    <input type="text" class="form-control text-dark h_inp " placeholder="برای جستجونام محصول راواردکنید" aria-label="" aria-describedby="basic-addon1" style="background-color: #F1F2F4; color: #989899; border-radius: 0px 5px 5px 0px; border-left: 0px; border-color: #F1F2F4; font-size: 12px;">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary s_header_btn" type="button" style="border-right: 0; background-color: #F1F2F4; border-color: #F1F2F4; border-radius: 5px 0px 0px 5px; font-size: 13px; height: 50px;">
                            جستجوکنید
                        </button>
                     </div>
                </div> 
              </div>  
              <div class="d-flex flex-row s4">
                <div class="d-sm-inline d-none header_icon ">
                   <button type="button" class="btn btn-primary position-relative bg-light border-0" >
                       <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart text-dark" viewBox="0 0 16 16">
                           <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                         </svg>
                       <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                         0
                         <span class="visually-hidden">unread messages</span>
                       </span>
                     </button>
                </div>
                <div>
                   <span style="font-weight: bold;" class="d-xl-inline d-none">ورود/عضویت</span>
                   <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                       <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                     </svg>
    
                </div>
                <div class="d-xl-flex flex-row d-none header_icon"> 
                   <div class="d-flex flex-column pr-2 ">
                  
                   </div>
                   <div>
                       <button type="button" class="btn btn-light position-relative ">
                           <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-basket2" viewBox="0 0 16 16">
                               <path d="M4 10a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0zm3 0a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0zm3 0a1 1 0 1 1 2 0v2a1 1 0 0 1-2 0z"/>
                               <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-.623l-1.844 6.456a.75.75 0 0 1-.722.544H3.69a.75.75 0 0 1-.722-.544L1.123 8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.163 8l1.714 6h8.246l1.714-6z"/>
                             </svg>
                           <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                             0
                             <span class="visually-hidden">unread messages</span>
                           </span>
                         </button>
                   </div>
    
                </div>
            </div>
       </header>
       @yield('content')
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
       
</body>
</html>  