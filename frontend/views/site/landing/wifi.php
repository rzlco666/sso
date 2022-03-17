<style>
    span .key:hover{
        cursor:pointer;
    }
    .copy, .copied{
        transition: ease .3s;
        position:absolute;
    }
    .copied{
        width: fit-content;
    }
    .hide{opacity:0;}

    span .key2:hover{
        cursor:pointer;
    }
    .copy2, .copied2{
        transition: ease .3s;
        position:absolute;
    }
    .copied2{
        width: fit-content;
    }
    .hide2{opacity:0;}
</style>

<!-- pricing section -->
<section class="section pricing" id="pricing">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="title text-center mb-5">
                    <h6 class="mb-0 fw-bold text-primary">Wi-Fi <i
                                class="mdi mdi-wifi-settings"></i></h6>
                    <h2 class="f-40">Akun Wi-Fi</h2>
                    <p class="text-muted">Generate akun Wi-Fi untuk kamu gunakan dilingkungan ITS PKU Muhammadiyah Surakarta.</p>

                </div>
            </div>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="col-lg-4">
                <div class="price-item shadow-sm overflow-hidden mt-4 mt-lg-0">
                    <div class="topbar-header bg-primary py-2 text-center">
                        <h6 class="mb-0 text-white fw-normal">Akun Wi-Fi Mahasiswa</h6>
                    </div>

                    <div class="price-down-box p-4">
                        <div class="badge bg-primary fw-normal f-14">Aktif</div>
                        <div class="price-tag mt-2">
                            <h6 class="mb-0 f-20">
                                <i class="mdi mdi-account"></i>
                                <span class="key">SyahrizalA A</span>
                                <span class="copy hide">
                                    &nbsp;<i class="mdi mdi-content-copy"></i>
                                </span>
                                <span class="copied hide">
                                    &nbsp;<i class="mdi mdi-check text-success"></i>
                                </span>
                            </h6>
                            <h6 class="mb-0 f-20">
                                <i class="mdi mdi-lock"></i>
                                <span class="key2">TestPass</span>
                                <span class="copy2 hide">
                                    &nbsp;<i class="mdi mdi-content-copy"></i>
                                </span>
                                <span class="copied2 hide">
                                    &nbsp;<i class="mdi mdi-check text-success"></i>
                                </span>
                            </h6>
                        </div>
                        <p class="text-muted mb-0 mt-2"><span class="text-danger">*</span> Klik teks untuk menyalin</p>
                        <p class="text-muted mb-0">Hubungkan dengan Wi-Fi <b>@mahasiswa</b>.</p>

                        <a href="" class="btn btn-sm btn-primary mt-3"><i class="mdi mdi-check-all me-2"></i>Buy
                            Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end pricing -->

<script>
    const key = document.querySelector('.key')
    const keyText = key.innerText
    const copy = document.querySelector('.copy')
    const copied = document.querySelector('.copied')


    // Show "copy" icon on hover with helper class.
    key.addEventListener('mouseover', () => copy.classList.remove('hide'))
    key.addEventListener('mouseleave', () => copy.classList.add('hide'))


    // Copy text when clicking on it.
    key.addEventListener('click', () => {
        // We change "copy" icon for "copied" message.
        copy.classList.add('hide')
        copied.classList.remove('hide')

        // We turn simple text into an input value temporarily, so we can use methods .select() and .execCommand() which are compatible with inputs and textareas.
        let helperInput = document.createElement('input')
        document.body.appendChild(helperInput)
        helperInput.value = keyText
        helperInput.select()
        document.execCommand('copy')
        document.body.removeChild(helperInput)

        // We remove the "copied" message after 2 seconds.
        setTimeout( () => {
            copied.classList.add('hide')
        }, 2000)

    })
</script>

<script>
    const key2 = document.querySelector('.key2')
    const keyText2 = key2.innerText
    const copy2 = document.querySelector('.copy2')
    const copied2 = document.querySelector('.copied2')


    // Show "copy" icon on hover with helper class.
    key2.addEventListener('mouseover', () => copy2.classList.remove('hide'))
    key2.addEventListener('mouseleave', () => copy2.classList.add('hide'))


    // Copy text when clicking on it.
    key2.addEventListener('click', () => {
        // We change "copy" icon for "copied" message.
        copy2.classList.add('hide')
        copied2.classList.remove('hide')

        // We turn simple text into an input value temporarily, so we can use methods .select() and .execCommand() which are compatible with inputs and textareas.
        let helperInput = document.createElement('input')
        document.body.appendChild(helperInput)
        helperInput.value = keyText2
        helperInput.select()
        document.execCommand('copy')
        document.body.removeChild(helperInput)

        // We remove the "copied" message after 2 seconds.
        setTimeout( () => {
            copied2.classList.add('hide')
        }, 2000)

    })
</script>