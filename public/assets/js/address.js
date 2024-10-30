    // REGION DATA
    function populateSelectRegion(regionData) {
        let loc = document.getElementById("regionSelect");

        regionData.RECORDS.sort((a, b) => a.regCode.localeCompare(b.regCode)).forEach(record => {
            let option = document.createElement("option");
            option.value = record.regCode;
            option.textContent = record.regDesc;
            loc.append(option);
        });
    }
    populateSelectRegion(regionData);

    // PROVINCE DATA
    function populateSelectProvince(provinceData, regionCode) {
        let loc = document.getElementById("provinceSelect");
        loc.innerHTML = '<option value="">Select Province</option>'; // Clear previous options

        provinceData.RECORDS.filter(record => record.regCode === regionCode)
            .sort((a, b) => a.provDesc.localeCompare(b.provDesc))
            .forEach(record => {
                let option = document.createElement("option");
                option.value = record.provCode;
                option.textContent = record.provDesc;
                loc.append(option);
            });
    }

    // CITY DATA
    function populateSelectCity(cityData, provinceCode) {
        let loc = document.getElementById("citySelect");
        loc.innerHTML = '<option value="">Select City</option>'; // Clear previous options

        cityData.RECORDS.filter(record => record.provCode === provinceCode)
            .sort((a, b) => a.citymunDesc.localeCompare(b.citymunDesc))
            .forEach(record => {
                let option = document.createElement("option");
                option.value = record.citymunCode;
                option.textContent = record.citymunDesc;
                loc.append(option);
            });
    }

    // BARANGAY DATA
    function populateSelectBarangay(barangayData, citymunCode) {
        let loc = document.getElementById("barangaySelect");
        loc.innerHTML = '<option value="">Select Barangay</option>'; // Clear previous options

        barangayData.RECORDS.filter(record => record.citymunCode === citymunCode)
            .sort((a, b) => a.brgyDesc.localeCompare(b.brgyDesc))
            .forEach(record => {
                let option = document.createElement("option");
                option.value = record.brgyCode;
                option.textContent = record.brgyDesc;
                loc.append(option);
            });
    }

    // Event Listeners
    document.getElementById("regionSelect").addEventListener("change", function() {
        let regionCode = this.value;
        populateSelectProvince(provinceData, regionCode);
        document.getElementById("provinceSelect").dispatchEvent(new Event('change')); // Trigger change event for province select
    });

    document.getElementById("provinceSelect").addEventListener("change", function() {
        let provinceCode = this.value;
        populateSelectCity(cityData, provinceCode);
        document.getElementById("citySelect").dispatchEvent(new Event('change')); // Trigger change event for city select
    });

    document.getElementById("citySelect").addEventListener("change", function() {
        let citymunCode = this.value;
        populateSelectBarangay(barangayData, citymunCode);
    });

    // Initial population
    populateSelectProvince(provinceData, document.getElementById("regionSelect").value);
    populateSelectCity(cityData, document.getElementById("provinceSelect").value);
    populateSelectBarangay(barangayData, document.getElementById("citySelect").value);
