// REGION DATA
function populateSelectRegion(regionData) {
    let loc = document.getElementById("regionSelect");
    loc.innerHTML = '<option value="">Select Region</option>';

    regionData.RECORDS.sort((a, b) => a.order - b.order).forEach((record) => {
        let option = document.createElement("option");
        option.value = record.regDesc;
        option.setAttribute("data-reg-code", record.regCode);
        option.textContent = record.regDesc2 || record.regDesc;
        loc.append(option);
    });
}

// PROVINCE DATA
function populateSelectProvince(provinceData) {
    let loc = document.getElementById("provinceSelect");
    loc.innerHTML = '<option value="">Select Province</option>';
    
    let selectedRegionCode = document
        .getElementById("regionSelect")
        .options[document.getElementById("regionSelect").selectedIndex]
        .getAttribute("data-reg-code");

    provinceData.RECORDS.filter(record => record.regCode === selectedRegionCode)
        .sort((a, b) => a.provDesc.localeCompare(b.provDesc))
        .forEach((record) => {
            let option = document.createElement("option");
            option.value = capitalizeFirstLetter(record.provDesc);
            
            option.setAttribute("data-prov-code", record.provCode);
            option.textContent =  capitalizeFirstLetter(record.provDesc);
            loc.append(option);
        });
}

// CITY DATA
function populateSelectCity(cityData) {
    let loc = document.getElementById("citySelect");
    loc.innerHTML = '<option value="">Select City</option>';

    let selectedProvinceCode = document
        .getElementById("provinceSelect")
        .options[document.getElementById("provinceSelect").selectedIndex]
        .getAttribute("data-prov-code");

    if (!selectedProvinceCode) return;

    cityData.RECORDS.filter(record => record.provCode === selectedProvinceCode)
        .sort((a, b) => a.citymunDesc.localeCompare(b.citymunDesc))
        .forEach((record) => {
            let option = document.createElement("option");
            option.value = capitalizeFirstLetter(record.citymunDesc);
            option.setAttribute("data-citymun-code", record.citymunCode);
            option.textContent =  capitalizeFirstLetter(record.citymunDesc);
            loc.append(option);
        });
}

// BARANGAY DATA
function populateSelectBarangay(barangayData) {
    let loc = document.getElementById("barangaySelect");
    loc.innerHTML = '<option value="">Select Barangay</option>';

    let selectedCityCode = document
        .getElementById("citySelect")
        .options[document.getElementById("citySelect").selectedIndex]
        .getAttribute("data-citymun-code");

    if (!selectedCityCode) return;

    barangayData.RECORDS.filter(record => record.citymunCode === selectedCityCode)
        .sort((a, b) => a.brgyDesc.localeCompare(b.brgyDesc))
        .forEach((record) => {
            let option = document.createElement("option");
            option.value = record.brgyDesc;
            option.setAttribute("data-barangay-code", record.brgyCode);
            option.textContent = record.brgyDesc;
            loc.append(option);
        });
}

// Event Listeners
document.getElementById("regionSelect").addEventListener("change", function() {
    populateSelectProvince(provinceData);
    document.getElementById("citySelect").innerHTML = '<option value="">Select City</option>';
    document.getElementById("barangaySelect").innerHTML = '<option value="">Select Barangay</option>';
});

document.getElementById("provinceSelect").addEventListener("change", function() {
    populateSelectCity(cityData);
    document.getElementById("barangaySelect").innerHTML = '<option value="">Select Barangay</option>';
});

document.getElementById("citySelect").addEventListener("change", function() {
    populateSelectBarangay(barangayData);
});

// Initial population
populateSelectRegion(regionData);

function capitalizeFirstLetter(val) {
    let newVal = val.toLowerCase();
    return String(newVal).charAt(0).toUpperCase() + String(newVal).slice(1);
}