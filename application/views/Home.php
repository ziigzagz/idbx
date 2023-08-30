<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:description" content="อนุมัติ OT Online">
    <meta property="og:title" content="อนุมัติ OT Online">
    <title>OT Online</title>

    <!-- See CSS.html file -->
</head>

<body>
    <div class="half-circle-container">
        <div class="half-circle-top"></div>
        <div class="half-circle-bottom"></div>
        <div class="content">
            <div class="container ">
                <div class="row mt-3">
                    <div class="col">
                        <div class="card text-center">
                            <div class="card-body">
                                <form action id="InsertOTForm">
                                    <div class="row py-3">
                                        <div class="col title-purple">
                                            <h4>
                                                <b>แบบฟอร์มขออนุมัติปฏิบัติงานล่วงเวลา</b>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col text-start">
                                            หน้าที่รับผิดชอบ <span class="text-danger">*</span>
                                            <select name="Roles" id="Roles" class="form-select">
                                                <option value>-- ระบุหน้าที่รับผิดชอบ --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-lg-6 text-start">
                                            <div class="row">
                                                <div class="col-6">
                                                    เริ่ม OT
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="time" id="StartOT" name="StartOT" class="form-control" min="00:00" max="23:59" onchange="updateEndTime()">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 text-start">
                                            <div class="row">
                                                <div class="col-6">
                                                    สิ้นสุด OT
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="time" id="EndOT" name="EndOT" class="form-control">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-lg-6 text-start">
                                            วันที่ทำ OT <span class="text-danger">*</span>
                                            <input type="text" name="DateOT" id="DateOT" size="30" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            รายละเอียดงานที่ปฏิบัติ <span class="text-danger">*</span>
                                            <textarea name="WorkDetail" id="WorkDetail" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            Machine Name<span class="text-danger">*</span>
                                            <textarea name="MachineName" id="MachineName" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col text-center">
                                            รหัสพนักงาน
                                        </div>
                                        <div class="col text-center">
                                            ชื่อ
                                        </div>
                                        <div class="col text-center">
                                            จองรถ
                                        </div>
                                    </div>
                                    <div id="Emp-list-panel">

                                    </div>
                                    <div class="row mt-3">
                                        <div class="col text-center">
                                            <button type="button" class="btn btn-insert" onclick="CheckForm()">บันทึก</button>
                                            <!-- <button type="reset" class="btn btn-clear">ล้างข้อมูล</button> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col text-center">
                                        กำลังส่งข้อมูล
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModalLoading" tabindex="-1" role="dialog" aria-labelledby="myModalLoading" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col text-center">
                                        กำลังโหลด
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    var Emplist = {}
                    var OTTimelist = {}
                    var Roleslist = {}
                    var Carlist = {}
                    var Car = {}
                    const count = 10;
                    var GenID = "";
                    var currentDate = new Date();
                    let day = ((currentDate.getDate())).toString().padStart(2, '0')
                    let month = ((currentDate.getMonth()) + 1).toString().padStart(2, '0');
                    let year = currentDate.getFullYear() % 100;
                    $("#DateOT").datepicker({
                        format: 'dd/mm/yy',
                        startDate: "-0d",
                        todayHighlight: true,
                        inline: false,
                        setDate: currentDate,
                        // autoclose: true
                    });

                    $("#DateOT").focusout(function() {
                        // $("#DateOT").val(`${day}/${month}/${year}`)
                    });

                    // $("#DateOT").val(`${day}/${month}/${year}`)
                    const Rules = {
                        Roles: {
                            required: true,
                        },
                        StartOT: {
                            required: true,
                        },
                        EndOT: {
                            required: true,
                        },
                        DateOT: {
                            required: true,
                        },
                        CarTravel: {
                            required: true,
                        },
                        WorkDetail: {
                            required: true,
                        },
                        MachineName: {
                            required: true,
                        },
                    }

                    const Messages = {
                        Roles: {
                            required: "กรุณาระบุบทบาทหน้าที่",
                        },
                        StartOT: {
                            required: "กรุณาระบุเวลาเริ่มทำโอที",
                        },
                        EndOT: {
                            required: "กรุณาระบุเวลาทำโอทีเสร็จ",
                            min: "เวลาสิ้นสุด ไม่น้อยกว่าเวลาเริ่ม"
                        },
                        DateOT: {
                            required: "กรุณาระบุวันที่ทำโอที",
                        },
                        CarTravel: {
                            required: "กรุณาระบุการเดินทาง",
                        },
                        WorkDetail: {
                            required: "กรุณาระบุรายละเอียดงาน",
                        },
                        MachineName: {
                            required: "กรุณาระบุ Machine Name",
                        },
                    }

                    // function getRoles() {
                    //     google.script.run.withSuccessHandler(function(response) {
                    //         var list = document.getElementById('Roles');
                    //         for (const [key, value] of Object.entries(response)) {
                    //             var option = document.createElement("option");
                    //             option.value = key;
                    //             option.text = `${key} : ${value}`;
                    //             list.appendChild(option);
                    //         }
                    //         Roleslist = response
                    //         $('#InsertOTForm').show()
                    //     }).PopulateRoles();
                    // }

                    function updateEndTime() {
                        const startOTInput = document.getElementById('StartOT');
                        const endOTInput = document.getElementById('EndOT');
                        // Get the value of the start time input
                        const startTime = startOTInput.value;
                        // Update the minimum value of the end time input
                        endOTInput.min = startTime;
                    }

                    function GetDataInsertForHRM() {
                        let OTStartTime = $("#StartOT").val()
                        let OTEndTime = $("#EndOT").val()
                        let data = [];
                        let CheckDuplicateData = []
                        for (let index = 0; index < count; index++) {
                            if ($(`#EmpName-${index}`).val().length > 0 && !CheckDuplicateData.includes($(`#EmpID-${index}`).val())) {
                                data.push([
                                    "",
                                    $(`#EmpID-${index}`).val().toUpperCase(),
                                    $("#DateOT").val().toUpperCase(),
                                    $("#DateOT").val().toUpperCase(),
                                    OTStartTime,
                                    OTEndTime,
                                    1,
                                    2,
                                    3,
                                    GenID
                                ])
                                CheckDuplicateData.push($(`#EmpID-${index}`).val())
                            }

                        }
                        return data;
                    }

                    function GetDataInsertForMT() {
                        let OTStartTime = $("#StartOT").val()
                        let OTEndTime = $("#EndOT").val()
                        let data = [];
                        let CheckDuplicateData = []
                        for (let index = 0; index < count; index++) {
                            if ($(`#EmpName-${index}`).val().length > 0 && !CheckDuplicateData.includes($(`#EmpID-${index}`).val())) {
                                data.push([
                                    GenID,
                                    $(`#EmpID-${index}`).val().toUpperCase(),
                                    $(`#EmpName-${index}`).val().toUpperCase(),
                                    Roleslist[$("#Roles").val()],
                                    OTStartTime,
                                    OTEndTime,
                                    $("#DateOT").val(),
                                    Car[$(`#CarTravel-${index}`).val()],
                                    $("#WorkDetail").val(),
                                    $("#MachineName").val()
                                ])
                                CheckDuplicateData.push($(`#EmpID-${index}`).val())
                            }
                        }
                        return data
                    }

                    async function CheckForm() {
                        $("#InsertOTForm").validate({
                            rules: Rules,
                            messages: Messages
                        });
                        if ($('#InsertOTForm').valid()) {
                            $('#myModal').modal('show')
                            GenID = await GenerateID();
                            InsertData()
                        }
                    }
                    async function initialEmpList(count) {
                        for (var index = 0; index < count; ++index) {
                            let template = `<div class="row mt-3">
                                    <div class="col text-start">
                                        <input type="text" name="EmpID" id="EmpID-${index}" maxlength="6" minlength="6"
                                            class="form-control" onkeyup="fetchEmp('${index}')" placeholder="รหัสพนักงาน">
                                    </div>
                                    <div class="col text-start">
                                        <input readonly type="text" name="EmpName-${index}" id="EmpName-${index}" class="form-control"
                                            placeholder="ชื่อ">
                                    </div>
                                    <div class="col text-start">
                                        <select name="CarTravel-${index}" id="CarTravel-${index}" class="form-select">` + index + `</select>
                                    </div>
                                </div>`;

                            $("#Emp-list-panel").append(template)
                        }
                    }

                    function GenerateID() {
                        // generate id (number and string)
                        let id = "";
                        let possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                        for (let i = 0; i < 15; i++)
                            id += possible.charAt(Math.floor(Math.random() * possible.length));
                        return id
                    }

                    async function Main() {
                        var emplist = await initialEmpList(count)
                    }
                    Main();
                </script>
            </div>
        </div>

    </div>
</body>

</html>