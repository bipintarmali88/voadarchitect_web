<section id="projects" class="bg-dark">
    <div class="container-fluid p-5 projects">
        <h2 class="text-info display-4">Projects</h2>
        <div class="row">
            <div class="col-xl-5">
                <div class="row">
                    <div class="col-lg-12 " >
                        <a  onclick="getProjectsFileForModal('01_lovely_home')">
                            <img src="resources\img\slider\02.jpg" class="zoom img-fluid " alt="" data-toggle="modal" data-target=".bd-example-modal-xl">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <a onclick="getProjectsFileForModal('02_mahavir_enclave')">
                            <img src="resources\img\projects\02_mahavir_enclave\3d view rendered.jpg" class="zoom img-fluid " alt="" data-toggle="modal" data-target=".bd-example-modal-xl">
                        </a>
                        <a onclick="getProjectsFileForModal('14_interior_kitchen')">
                            <img src="resources\img\projects\14_interior_kitchen\kitchen render 5.jpg" class="zoom img-fluid " alt="" data-toggle="modal" data-target=".bd-example-modal-xl" style="padding-top: 15px;">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a onclick="getProjectsFileForModal('06_noida_interior')">
                            <img src="resources\img\projects\06_noida_interior\rendered view - 3.jpg" class="zoom img-fluid " alt="" data-toggle="modal" data-target=".bd-example-modal-xl">
                        </a>
                        <a onclick="getProjectsFileForModal('11_sagarpur_residence')">
                            <img src="resources\img\projects\11_sagarpur_residence\residence view final.jpg" class="zoom img-fluid " alt="" data-toggle="modal" data-target=".bd-example-modal-xl" style="padding-top: 19px;">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="row">
                    <div class="col-sm-4">
                        <a onclick="getProjectsFileForModal('04_janakpuri_residence')">
                            <img src="resources\img\projects\04_janakpuri_residence\final rendered 1.jpg" class="zoom img-fluid " alt="" data-toggle="modal" data-target=".bd-example-modal-xl">
                        </a>
                        <a onclick="getProjectsFileForModal('07_naraina_office')">
                            <img src="resources\img\projects\07_naraina_office\rendered view 4.jpg" class="zoom img-fluid " alt="" data-toggle="modal" data-target=".bd-example-modal-xl">
                        </a>
                        <a onclick="getProjectsFileForModal('09_dehradun_residence')">
                            <img src="resources\img\projects\09_dehradun_residence\view - 4.jpg" class="zoom img-fluid " alt="" data-toggle="modal" data-target=".bd-example-modal-xl" style="padding-top: 25px;">
                        </a>
                        <a onclick="getProjectsFileForModal('03_gurgaon_interior')">
                            <img src="resources\img\projects\03_gurgaon_interior\rendered view - 1.jpg" class="zoom img-fluid " alt="" data-toggle="modal" data-target=".bd-example-modal-xl">
                        </a>
                    </div>
                    <div class="col-sm-4">
                    <a onclick="getProjectsFileForModal('12_dwarka_interior')">
                            <img src="resources\img\projects\12_dwarka_interior\drawing room 1.jpg" class="zoom img-fluid " alt="" data-toggle="modal" data-target=".bd-example-modal-xl">
                        </a>
                        <a onclick="getProjectsFileForModal('10_ghaziabad_residence')">
                            <img src="resources\img\projects\10_ghaziabad_residence\rendered view - 2.jpg" class="zoom img-fluid " alt="" data-toggle="modal" data-target=".bd-example-modal-xl" style="padding-top: 28px;">
                        </a>
                        <a onclick="getProjectsFileForModal('15_murad_nagar')">
                            <img src="resources\img\projects\15_murad_nagar\revised rendered view - 3.jpg" class="zoom img-fluid " alt="" data-toggle="modal" data-target=".bd-example-modal-xl">
                        </a>
                        <a onclick="getProjectsFileForModal('13_solan_banquet')">
                            <img src="resources\img\projects\13_solan_banquet\night render 1.jpg" class="zoom img-fluid " alt="" data-toggle="modal" data-target=".bd-example-modal-xl">
                        </a>
                    </div>
                    <div class="col-lg-4">
                    <a onclick="getProjectsFileForModal('08_murad_nagar_residence')">
                            <img src="resources\img\projects\08_murad_nagar_residence\revised rendered view - 1.jpg" class="zoom img-fluid " alt="" data-toggle="modal" data-target=".bd-example-modal-xl">
                        </a>
                        <a onclick="getProjectsFileForModal('05_kirti_nagar')">
                            <img src="resources\img\projects\05_kirti_nagar\side view - 2.jpg" class="zoom img-fluid " alt="" data-toggle="modal" data-target=".bd-example-modal-xl" style="padding-top: 30px;">
                        </a>
                       
                        <a onclick="getProjectsFileForModal('16_ghaziabad')">
                            <img src="resources\img\projects\16_ghaziabad\final rendered view op 3.jpg" class="zoom img-fluid " alt="" data-toggle="modal" data-target=".bd-example-modal-xl" style="padding-top: 27px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true"
style="background-color: transparent">
    <button type="button" class="close text-white pr-5 pt-4" data-dismiss="modal"><i class="fas fa-window-close" aria-hidden="true"></i></button>
  <br>
    <div class="modal-dialog modal-xl">
    <div id="projectModal" class="modal-content shadow" style="background-color: rgba(0, 0, 0, 0.73) !important;">
    </div>
  </div>
</div>