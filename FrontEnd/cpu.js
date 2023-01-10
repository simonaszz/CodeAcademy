

// const os = require('os');

// let cpu = os.cpus();

// let noCore = 0;
// cpu.forEach(element => {
//     noCore++;
//     console.log("Logical core "
//         + noCore + " :");
//     console.log(element);
// });

// console.log("total number of logical core is: "
//     + noCore);


let os = require('os');

function getCpuDetails() {
    let data = {};
    data.cpuName = os.cpus()[0].model;
    data.count = os.cpus().length;
    return data;
}

console.log(getCpuDetails());