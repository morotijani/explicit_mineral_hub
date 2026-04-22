<?php
   require_once  __DIR__ . '/system/DatabaseConnector.php';
   $title = 'Services - ';
   $navClass = "navbar-light w-100";
   include  __DIR__ . '/system/inc/head.php';
   include  __DIR__ . '/system/inc/topnav.php';
?>

    <div class="pattern-square"></div>
    <section class="bg-light py-5 py-lg-8 bg-opacity-50" style="background-image: url(<?= PROOT; ?>assets/media/back.jpeg); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div>
                        <h1 class="mb-0">Our Services</h1>
                         <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= PROOT; ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <div class="pattern-square"></div>
    <!--Industry we serve start-->
         <section class="py-xl-9 py-5 bg-light" data-cue="fadeIn">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 offset-lg-2 col-12">
                     <div class="text-center mb-xl-7 mb-5" data-cue="fadeIn">
                        <small class="text-uppercase ls-md fw-semibold text-primary">Services</small>
                        <h2 class="my-3">Our industry expertise and solutions</h2>
                        <p class="mb-0 text-body">
                           M. Enterprise Ghana Limited provides consultancy services into four (4) thematic areas:. Our expertise extends across:
                        </p>
                     </div>
                  </div>
               </div>
               <div class="row g-4">
                  <div class="col-lg-3 col-md-4 col-6">
                     <a href="#!" class="card-hover bg-white card card-lift text-center p-4" data-cue="zoomIn">
                        <span class="border rounded-circle icon-shape icon-xxl mb-4">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                 opacity="0.2"
                                 d="M23 23H28V26C28 26.2652 27.8946 26.5196 27.7071 26.7071C27.5196 26.8946 27.2652 27 27 27H24C23.7348 27 23.4804 26.8946 23.2929 26.7071C23.1054 26.5196 23 26.2652 23 26V23ZM4 26C4 26.2652 4.10536 26.5196 4.29289 26.7071C4.48043 26.8946 4.73478 27 5 27H8C8.26522 27 8.51957 26.8946 8.70711 26.7071C8.89464 26.5196 9 26.2652 9 26V23H4V26ZM24.2638 6.59375C24.1852 6.41702 24.057 6.26686 23.8949 6.16148C23.7327 6.05609 23.5434 6 23.35 6H8.65C8.45659 6 8.26733 6.05609 8.10514 6.16148C7.94296 6.26686 7.81482 6.41702 7.73625 6.59375L4 15H28L24.2638 6.59375Z"
                                 fill="" />
                              <path
                                 d="M30 14H28.65L25.1775 6.1875C25.0204 5.83403 24.7641 5.53372 24.4397 5.32296C24.1153 5.11219 23.7368 5 23.35 5H8.65C8.26317 5 7.88465 5.11219 7.56029 5.32296C7.23593 5.53372 6.97965 5.83403 6.8225 6.1875L3.35 14H2C1.73478 14 1.48043 14.1054 1.29289 14.2929C1.10536 14.4804 1 14.7348 1 15C1 15.2652 1.10536 15.5196 1.29289 15.7071C1.48043 15.8946 1.73478 16 2 16H3V26C3 26.5304 3.21071 27.0391 3.58579 27.4142C3.96086 27.7893 4.46957 28 5 28H8C8.53043 28 9.03914 27.7893 9.41421 27.4142C9.78929 27.0391 10 26.5304 10 26V24H22V26C22 26.5304 22.2107 27.0391 22.5858 27.4142C22.9609 27.7893 23.4696 28 24 28H27C27.5304 28 28.0391 27.7893 28.4142 27.4142C28.7893 27.0391 29 26.5304 29 26V16H30C30.2652 16 30.5196 15.8946 30.7071 15.7071C30.8946 15.5196 31 15.2652 31 15C31 14.7348 30.8946 14.4804 30.7071 14.2929C30.5196 14.1054 30.2652 14 30 14ZM8.65 7H23.35L26.4613 14H5.53875L8.65 7ZM8 26H5V24H8V26ZM24 26V24H27V26H24ZM27 22H5V16H27V22ZM7 19C7 18.7348 7.10536 18.4804 7.29289 18.2929C7.48043 18.1054 7.73478 18 8 18H10C10.2652 18 10.5196 18.1054 10.7071 18.2929C10.8946 18.4804 11 18.7348 11 19C11 19.2652 10.8946 19.5196 10.7071 19.7071C10.5196 19.8946 10.2652 20 10 20H8C7.73478 20 7.48043 19.8946 7.29289 19.7071C7.10536 19.5196 7 19.2652 7 19ZM21 19C21 18.7348 21.1054 18.4804 21.2929 18.2929C21.4804 18.1054 21.7348 18 22 18H24C24.2652 18 24.5196 18.1054 24.7071 18.2929C24.8946 18.4804 25 18.7348 25 19C25 19.2652 24.8946 19.5196 24.7071 19.7071C24.5196 19.8946 24.2652 20 24 20H22C21.7348 20 21.4804 19.8946 21.2929 19.7071C21.1054 19.5196 21 19.2652 21 19Z"
                                 fill="" />
                           </svg>
                        </span>
                        <h4 class="mb-0 card-text fs-5">Mineral Exploration</h4>
                     </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6">
                     <a href="#!" class="card-hover bg-white card card-lift text-center p-4" data-cue="zoomIn">
                        <span class="border rounded-circle icon-shape icon-xxl mb-4">
                           <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                 opacity="0.2"
                                 d="M29 11.75C29 20 16 27 16 27C16 27 3 20 3 11.75C3 9.95979 3.71116 8.2429 4.97703 6.97703C6.2429 5.71116 7.95979 5 9.75 5C12.5738 5 14.9925 6.53875 16 9C17.0075 6.53875 19.4262 5 22.25 5C24.0402 5 25.7571 5.71116 27.023 6.97703C28.2888 8.2429 29 9.95979 29 11.75Z"
                                 fill="" />
                              <path
                                 d="M9 17H4C3.73478 17 3.48043 16.8946 3.29289 16.7071C3.10536 16.5196 3 16.2652 3 16C3 15.7348 3.10536 15.4804 3.29289 15.2929C3.48043 15.1054 3.73478 15 4 15H8.465L10.1675 12.445C10.2588 12.3078 10.3825 12.1953 10.5278 12.1175C10.673 12.0397 10.8352 11.999 11 11.999C11.1648 11.999 11.327 12.0397 11.4722 12.1175C11.6175 12.1953 11.7412 12.3078 11.8325 12.445L15 17.195L16.1675 15.445C16.2589 15.308 16.3827 15.1957 16.5279 15.1181C16.6732 15.0405 16.8353 14.9999 17 15H20C20.2652 15 20.5196 15.1054 20.7071 15.2929C20.8946 15.4804 21 15.7348 21 16C21 16.2652 20.8946 16.5196 20.7071 16.7071C20.5196 16.8946 20.2652 17 20 17H17.535L15.8325 19.555C15.7412 19.6922 15.6175 19.8047 15.4722 19.8825C15.327 19.9603 15.1648 20.001 15 20.001C14.8352 20.001 14.673 19.9603 14.5278 19.8825C14.3825 19.8047 14.2588 19.6922 14.1675 19.555L11 14.8025L9.8325 16.5525C9.74139 16.6899 9.6177 16.8027 9.47246 16.8808C9.32721 16.9589 9.1649 16.9998 9 17ZM22.25 4C19.6688 4 17.4088 5.11 16 6.98625C14.5912 5.11 12.3312 4 9.75 4C7.69528 4.00232 5.72539 4.81958 4.27248 6.27248C2.81958 7.72539 2.00232 9.69528 2 11.75C2 11.8438 2 11.9375 2 12.0312C2.00829 12.2965 2.12159 12.5475 2.31499 12.7292C2.50839 12.9109 2.76603 13.0083 3.03125 13C3.29647 12.9917 3.54753 12.8784 3.7292 12.685C3.91088 12.4916 4.00829 12.234 4 11.9688C4 11.8963 4 11.8225 4 11.75C4.00198 10.2256 4.60842 8.76423 5.68633 7.68633C6.76423 6.60842 8.22561 6.00198 9.75 6C12.1813 6 14.2225 7.295 15.075 9.375C15.1503 9.55841 15.2785 9.71528 15.4432 9.82569C15.6079 9.93609 15.8017 9.99503 16 9.99503C16.1983 9.99503 16.3921 9.93609 16.5568 9.82569C16.7215 9.71528 16.8497 9.55841 16.925 9.375C17.7775 7.29125 19.8187 6 22.25 6C23.7744 6.00198 25.2358 6.60842 26.3137 7.68633C27.3916 8.76423 27.998 10.2256 28 11.75C28 18.4513 18.28 24.5188 16 25.85C14.6463 25.0613 10.6712 22.6 7.665 19.3237C7.48565 19.1282 7.23594 19.0118 6.97081 19.0003C6.70568 18.9888 6.44685 19.0831 6.25125 19.2625C6.05565 19.4419 5.93931 19.6916 5.92783 19.9567C5.91634 20.2218 6.01065 20.4807 6.19 20.6763C10.0863 24.9263 15.3062 27.7612 15.5262 27.88C15.6719 27.9583 15.8346 27.9993 16 27.9993C16.1654 27.9993 16.3281 27.9583 16.4737 27.88C17.0262 27.5825 30 20.5 30 11.75C29.9977 9.69528 29.1804 7.72539 27.7275 6.27248C26.2746 4.81958 24.3047 4.00232 22.25 4Z"
                                 fill="" />
                           </svg>
                        </span>
                        <h4 class="mb-0 card-text fs-5">Mining Services</h4>
                     </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6">
                     <a href="#!" class="card-hover bg-white card card-lift text-center p-4" data-cue="zoomIn">
                        <span class="border rounded-circle icon-shape icon-xxl mb-4">
                           <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                 opacity="0.2"
                                 d="M28.0009 9L24.4359 20.5888C24.3099 20.9976 24.0562 21.3553 23.712 21.6093C23.3678 21.8633 22.9512 22.0002 22.5234 22H10.5096C10.0749 22.0002 9.65204 21.8588 9.30493 21.5971C8.95782 21.3355 8.70539 20.9679 8.58586 20.55L5.28711 9H28.0009Z"
                                 fill="" />
                              <path
                                 d="M12 27C12 27.3956 11.8827 27.7822 11.6629 28.1111C11.4432 28.44 11.1308 28.6964 10.7654 28.8478C10.3999 28.9991 9.99778 29.0387 9.60982 28.9616C9.22186 28.8844 8.86549 28.6939 8.58579 28.4142C8.30608 28.1345 8.1156 27.7781 8.03843 27.3902C7.96126 27.0022 8.00087 26.6001 8.15224 26.2346C8.30362 25.8692 8.55996 25.5568 8.88886 25.3371C9.21776 25.1173 9.60444 25 10 25C10.5304 25 11.0391 25.2107 11.4142 25.5858C11.7893 25.9609 12 26.4696 12 27ZM23 25C22.6044 25 22.2178 25.1173 21.8889 25.3371C21.56 25.5568 21.3036 25.8692 21.1522 26.2346C21.0009 26.6001 20.9613 27.0022 21.0384 27.3902C21.1156 27.7781 21.3061 28.1345 21.5858 28.4142C21.8655 28.6939 22.2219 28.8844 22.6098 28.9616C22.9978 29.0387 23.3999 28.9991 23.7654 28.8478C24.1308 28.6964 24.4432 28.44 24.6629 28.1111C24.8827 27.7822 25 27.3956 25 27C25 26.4696 24.7893 25.9609 24.4142 25.5858C24.0391 25.2107 23.5304 25 23 25ZM28.9562 9.29375L25.39 20.8825C25.2032 21.4968 24.8234 22.0346 24.3068 22.416C23.7903 22.7975 23.1646 23.0022 22.5225 23H10.5087C9.85747 22.9976 9.2245 22.7842 8.70463 22.3919C8.18477 21.9996 7.80598 21.4494 7.625 20.8237L3.1025 5H1C0.734784 5 0.48043 4.89464 0.292893 4.70711C0.105357 4.51957 0 4.26522 0 4C0 3.73478 0.105357 3.48043 0.292893 3.29289C0.48043 3.10536 0.734784 3 1 3H3.1025C3.53676 3.00144 3.95888 3.14349 4.30567 3.40487C4.65246 3.66626 4.90526 4.03293 5.02625 4.45L6.04 8H28C28.1565 7.99994 28.3108 8.03661 28.4505 8.10706C28.5903 8.17751 28.7115 8.27976 28.8045 8.40561C28.8976 8.53145 28.9597 8.67737 28.9861 8.83163C29.0124 8.98588 29.0022 9.14417 28.9562 9.29375ZM26.6462 10H6.61125L9.5475 20.275C9.60724 20.4839 9.73336 20.6676 9.90679 20.7984C10.0802 20.9292 10.2915 21 10.5087 21H22.5225C22.7365 21.0001 22.9448 20.9315 23.117 20.8044C23.2891 20.6773 23.4159 20.4983 23.4788 20.2938L26.6462 10Z"
                                 fill="" />
                           </svg>
                        </span>
                        <h4 class="mb-0 card-text fs-5">Gold Trading</h4>
                     </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6">
                     <a href="#!" class="card-hover bg-white card card-lift text-center p-4" data-cue="zoomIn">
                        <span class="border rounded-circle icon-shape icon-xxl mb-4">
                           <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path opacity="0.2" d="M29 12H3L16 4L29 12Z" fill="" />
                              <path
                                 d="M3 13.0001H6V21.0001H4C3.73478 21.0001 3.48043 21.1055 3.29289 21.293C3.10536 21.4805 3 21.7349 3 22.0001C3 22.2653 3.10536 22.5197 3.29289 22.7072C3.48043 22.8948 3.73478 23.0001 4 23.0001H28C28.2652 23.0001 28.5196 22.8948 28.7071 22.7072C28.8946 22.5197 29 22.2653 29 22.0001C29 21.7349 28.8946 21.4805 28.7071 21.293C28.5196 21.1055 28.2652 21.0001 28 21.0001H26V13.0001H29C29.2176 12.9999 29.4292 12.9287 29.6026 12.7974C29.7761 12.666 29.902 12.4817 29.9612 12.2723C30.0205 12.063 30.0098 11.84 29.9308 11.6373C29.8519 11.4345 29.709 11.263 29.5238 11.1489L16.5238 3.14886C16.3662 3.05201 16.1849 3.00073 16 3.00073C15.8151 3.00073 15.6338 3.05201 15.4762 3.14886L2.47625 11.1489C2.29103 11.263 2.14811 11.4345 2.06916 11.6373C1.99021 11.84 1.97955 12.063 2.03878 12.2723C2.09801 12.4817 2.22391 12.666 2.39738 12.7974C2.57085 12.9287 2.78242 12.9999 3 13.0001ZM8 13.0001H12V21.0001H8V13.0001ZM18 13.0001V21.0001H14V13.0001H18ZM24 21.0001H20V13.0001H24V21.0001ZM16 5.17386L25.4675 11.0001H6.5325L16 5.17386ZM31 26.0001C31 26.2653 30.8946 26.5197 30.7071 26.7072C30.5196 26.8948 30.2652 27.0001 30 27.0001H2C1.73478 27.0001 1.48043 26.8948 1.29289 26.7072C1.10536 26.5197 1 26.2653 1 26.0001C1 25.7349 1.10536 25.4805 1.29289 25.293C1.48043 25.1055 1.73478 25.0001 2 25.0001H30C30.2652 25.0001 30.5196 25.1055 30.7071 25.293C30.8946 25.4805 31 25.7349 31 26.0001Z"
                                 fill="" />
                           </svg>
                        </span>
                        <h4 class="mb-0 card-text fs-5">Small Scale Mining Logistics</h4>
                     </a>
                  </div>
                  
                  
               </div>
            </div>
         </section>
         <!--Industry we serve end-->

    <!--Website design start-->
    <section class="mb-xl-9 py-5">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-lg-5 col-md-6 order-2">
                    <div class="p-3">
                    </div>
                    <div class="mb-5">
                        <h2 class="mb-2">Mineral Exploration And Production</h2>
                        <p>Mineral exploration is an investigative activity prior to mining. Mineral exploring takes two forms depending on the target deposit.
                        </p>
                    </div>
                    <div class="mb-5">
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success mt-1" viewBox="0 0 16 16">
                                    <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                                <span class="ms-2">Alluvial Exploration</span>
                            </li>
                           <li class="d-flex mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success mt-1" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                                <span class="ms-2">In-situ Exploration</span>
                           </li>
                        </ul>
                        <p>M. Enterprise Ghana Limited, holds the expertise to undertake both forms of exploration until the final production.</p>
                    </div>
                    <div class="mb-5">
                        <h2 class="mb-2">Mineral Exploration can be subdivided into four sub stages:</h2>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success mt-1" viewBox="0 0 16 16">
                                    <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                                <span class="ms-2">Grassroots exploration prior to detection of mineralization or identification of a geologic deposit.</span>
                            </li>
                            <li class="d-flex mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success mt-1" viewBox="0 0 16 16">
                                    <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                                <span class="ms-2">Advanced-stage exploration evaluating a geologic discovery to determine whether it should proceed to development.</span>
                            </li>
                            <li class="d-flex mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success mt-1" viewBox="0 0 16 16">
                                    <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                                <span class="ms-2">Deposit development, in which full technical and economic assessments are carried out, and a decision is made on whether to proceed to mining.</span>
                            </li>
                            <li class="d-flex mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success mt-1" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                                <span class="ms-2">Mine development, in which a mine and all associated facilities and infrastructure are planned, designed, and constructed.</span>
                            </li>
                        </ul>              
                        <p>M Enterprise Ghana Limited, holds the expertise to undertake any of the above sub-stage of explorations.</p>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 order-lg-2">
                    <figure class="mb-5 mb-md-0">
                        <img src="<?= PROOT; ?>assets/media/back-5.jpg" alt="service" class="rounded-3 img-fluid" />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-xl-9 py-5">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-lg-5 col-md-6">
                    <figure class="mb-5 mb-md-0">
                        <img src="<?= PROOT; ?>assets/media/back-4.jpg" alt="service" class="rounded-3 img-fluid" />
                    </figure>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 mb-4 mb-md-0">
                    <div class="mb-5">
                        <h2 class="mb-2">Mining Services</h2>
                        <p class="">Mine Process Advice.</p>
                        <p class="mb-0">A company can embark on grassroots exploration; should it discover a mineral deposit, it then chooses whether to continue with advanced exploration, take on a partner to jointly undertake further exploration, or sell its rights to further exploration to another company. Alternatively, company can eschew grassroots exploration altogether and enter the supply chain by participating in advanced exploration of a deposit discovered by someone else. Or a company can avoid exploration altogether and develop a known but undeveloped deposit. 
                        <br>Or, finally, a company can choose to invest in technological research and development that creates the possibility of making activities at any stage of production more efficient.
                        <br> M Enterprise Ghana Limited, can offer you very technical advice on mining processes.
                        </p>
                    </div>
                    <div class="mb-5">
                        <h2 class="mb-2">Mining Processes</h2>
                        <p class="">When exploration and development is complete MEG, can determine, as accurately as possible, the size of the deposit as well as how to extract and process the Ore efficiently, safely and responsibly.</p>
                        <p class="mb-0">MEG employs sophisticated equipment that use suction dredges that vacuum up gravel, sluices to separate the gravel from the black sand to extract the Gold Ore.</p>
                    </div>
                    <a href="#!" class="icon-link icon-link-hover text-success">
                        View Case Study
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path
                                fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-xl-9 py-5">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-md-6 col-lg-5 order-2">
                    <div class="mb-5">
                        <h2 class="mb-2">Gold Trading</h2>
                        <p class="">Ghana is well endowed with substantial mineral resources, the major ones being gold and diamonds. The country has seen strong economic growth recently due to it mineral resource exploitation, its GDP grew 8.5 percent in 2017. Aside from gold, the country also exports mineral resource such  as diamonds. Ghana’s annual gold revenues rose to $3.52 billion in 2017, a 10.2-percent increase from 2016. This is thought to be the result of greater output from the country’s mines, as per the Ghana Chamber of Mines Gold, the predominant mineral produced in the country, accounts for over 90% of all mineral revenues annually over the past two decades.
                        </p>
                        <p>M Enterprise Ghana Ltd Trade in Gold Purchasing and Supply and Can assist in the exploration of Gold.</p>
                        <p>The trading procedure involves: Assaying, invoicing, pack listing, documentation for customs clearance and finally Airway bills with details of exporter, to the point of destination.</p>
                        <p class="mb-0">There is absolutely no gold shipment under credit terms, the Bank of Ghana (BOG) regulations does not allow for shipment of gold before Payment.</p>
                    </div>
                    <div class="mb-5">
                        <h2 class="mb-2">NB:</h2>
                        <p class="">
                            The requirement is stated on the BOG form ‘A’ it is a precondition for export please ask for details and do not pay money to anybody to allow shipment other than the prescribed regulation.
                        </p>
                        <p>Note again that, Shipment of gold dust is not allowed, all gold must be smelted into ore bars to ascertain the purity for invoice value to be placed on customs clearance.</p>
                        <p class="mb-0">The total cost for export is calculated at 0.5% of export value. MEG’s commission is applied in the total cost.</p>
                    </div>
                    <div class="mb-5">
                        <a href="#!" class="icon-link icon-link-hover text-info">
                            View Case Study
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 order-lg-2">
                    <figure class="mb-5 mb-md-0">
                        <img src="<?= PROOT; ?>assets/media/service-3.jpg" alt="service" class="rounded-3 img-fluid" />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-xl-9 pb-5">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-lg-5 col-md-6">
                    <figure class="mb-5 mb-md-0">
                        <img src="<?= PROOT; ?>assets/media/back-6.jpg" alt="servuce" class="rounded-3 img-fluid" />
                    </figure>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 mb-4 mb-md-0">
                    <div class="mb-4">
                        <h2 class="mb-2">Small Scale Mining Logistics</h2>
                        <p class="mb-0">M. Enterprise Ghana Ltd, supplies and distributes equipment’s to the small scale Artisanal Mining industry. Our range of equipment’s includes the entire prerequisite for small scale mining <br> We provide:</p>
                    </div>
                    <div class="mb-4">
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success mt-1" viewBox="0 0 16 16">
                                <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                                <span class="ms-2">Crushing and screening equipment’s.</span>
                            </li>
                            <li class="d-flex mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success mt-1" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                                <span class="ms-2">Grinding and classifying equipment’s.</span>
                            </li>
                            <li class="d-flex mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success mt-1" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                                <span class="ms-2">Ore Beneficiation Equipment’s.</span>
                            </li>
                            <li class="d-flex mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success mt-1" viewBox="0 0 16 16">
                                    <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                                <span class="ms-2">Thickening and Dewatering Equipment’s</span>
                            </li>
                        </ul>    
                    </div>
                    <div class="border-top d-flex pb-3 mb-3">
                        <p class="mb-0">
                            <span class="text-dark">NB :</span>
                            Our equipment’s is well suited to miners producing 0.5 Tonnes per hour to 5 tonnes per hour. We offer free after sales service to our broad range of customers on the most efficient manner.
                        </p>
                    </div>
                    <a href="#!" class="icon-link icon-link-hover text-warning">
                        View Case Study
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                           <path
                              fill-rule="evenodd"
                              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php include  __DIR__ . '/system/inc/footer.php'; ?>