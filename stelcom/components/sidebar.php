<!-- sidebarist -->
<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark py-5">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <h3 class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline">Stelcom Dashboard</span>
        </h3>

        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start w-100">
            <li class="nav-item w-100">
                <a href="./validaccounts.php" class="nav-link text-white">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    <span class="ms-1 d-none d-sm-inline">Valid Accounts</span>
                </a>
            </li>

            <li class="nav-item w-100">
                <a href="./authvoters.php" class="nav-link text-white">
                    <i class="bi bi-clock-fill me-2"></i>
                    <span class="ms-1 d-none d-sm-inline">Unvalidated Accounts</span>
                </a>
            </li>

            <small class="mt-3 ms-0 d-block" style="font-weight: 600; text-transform: uppercase;">Candidate Section</small>
            <li class="nav-item w-100 mt-3">
                <a href="./president.php" class="nav-link text-white">
                    <i class="bi bi-person-circle me-2"></i>
                    <span class="ms-1 d-none d-sm-inline">President</span>
                </a>
            </li>

            <li class="nav-item w-100 mt-2">
                <a href="./vicepresident.php" class="nav-link text-white">
                    <i class="bi bi-person-circle me-2"></i>
                    <span class="ms-1 d-none d-sm-inline">Vice President</span>
                </a>
            </li>

            <li class="nav-item w-100 mt-auto layout-logout">
                <a href="../back-end/stelcomlogout.php" class="nav-link text-white">
                    <i class="bi bi-box-arrow-right me-2"></i>
                    <span class="ms-1 d-none d-sm-inline">Logout</span>
                </a>
            </li>

            <small class="mt-3 ms-0 d-block" style="font-weight: 600; text-transform: uppercase;">Result</small>
            <li class="nav-item w-100 mt-3">
                <a href="./voteresult.php" class="nav-link text-white">
                    <i class="bi bi-bar-chart-fill me-2"></i> <!-- Updated icon -->
                    <span class="ms-1 d-none d-sm-inline">Vote Result</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<style>
    .layout-logout {
        position: absolute;
        bottom: 30px;
    }
</style>
