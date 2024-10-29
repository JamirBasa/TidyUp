// script.js

// Sample function to load JSON data (update the path if necessary)
async function loadJSON(filePath) {
    const response = await fetch(filePath);
    const data = await response.json();
    return data.RECORDS;
}

// Load JSON data
let regions = [];
let provinces = [];
let cities = [];
let barangays = [];

// Updated file paths
Promise.all([
    loadJSON('../json/refregion.json'),
    loadJSON('../json/refprovince.json'),
    loadJSON('../json/refcitymun.json'),
    loadJSON('../json/refbrgy.json')
]).then(data => {
    regions = data[0];
    provinces = data[1];
    cities = data[2];
    barangays = data[3];

    populateRegions();
}).catch(error => console.error('Error loading JSON data:', error));


// Populate regions dropdown
function populateRegions() {
    const regionSelect = document.getElementById('regionSelect');
    regions.forEach(region => {
        const option = document.createElement('option');
        option.value = region.regCode;
        option.textContent = region.regDesc;
        regionSelect.appendChild(option);
    });
}

// Event listener for region selection
document.getElementById('regionSelect').addEventListener('change', function() {
    const selectedRegion = this.value;
    const provinceSelect = document.getElementById('provinceSelect');
    const citySelect = document.getElementById('citySelect');
    const barangaySelect = document.getElementById('barangaySelect');

    // Clear and disable dropdowns
    provinceSelect.innerHTML = '<option value="">Select Province</option>';
    provinceSelect.disabled = true;
    citySelect.innerHTML = '<option value="">Select City</option>';
    citySelect.disabled = true;
    barangaySelect.innerHTML = '<option value="">Select Barangay</option>';
    barangaySelect.disabled = true;

    // Filter provinces
    const filteredProvinces = provinces.filter(province => province.regCode === selectedRegion);
    filteredProvinces.forEach(province => {
        const option = document.createElement('option');
        option.value = province.provCode;
        option.textContent = province.provDesc;
        provinceSelect.appendChild(option);
    });

    provinceSelect.disabled = filteredProvinces.length === 0;
});

// Event listener for province selection
document.getElementById('provinceSelect').addEventListener('change', function() {
    const selectedProvince = this.value;
    const citySelect = document.getElementById('citySelect');
    const barangaySelect = document.getElementById('barangaySelect');

    // Clear and disable dropdowns
    citySelect.innerHTML = '<option value="">Select City</option>';
    citySelect.disabled = true;
    barangaySelect.innerHTML = '<option value="">Select Barangay</option>';
    barangaySelect.disabled = true;

    // Filter cities
    const filteredCities = cities.filter(city => city.provCode === selectedProvince);
    filteredCities.forEach(city => {
        const option = document.createElement('option');
        option.value = city.citymunCode;
        option.textContent = city.citymunDesc;
        citySelect.appendChild(option);
    });

    citySelect.disabled = filteredCities.length === 0;
});

// Event listener for city selection
document.getElementById('citySelect').addEventListener('change', function() {
    const selectedCity = this.value;
    const barangaySelect = document.getElementById('barangaySelect');

    // Clear barangay dropdown
    barangaySelect.innerHTML = '<option value="">Select Barangay</option>';
    barangaySelect.disabled = true;

    // Filter barangays
    const filteredBarangays = barangays.filter(brgy => brgy.citymunCode === selectedCity);
    filteredBarangays.forEach(brgy => {
        const option = document.createElement('option');
        option.value = brgy.brgyCode;
        option.textContent = brgy.brgyDesc;
        barangaySelect.appendChild(option);
    });

    barangaySelect.disabled = filteredBarangays.length === 0;
});

// Debugging statements
console.log('Regions:', regions);
console.log('Provinces:', provinces);
console.log('Cities:', cities);
console.log('Barangays:', barangays);

// Verify that dropdowns are being populated
populateRegions();
console.log('Dropdowns populated');

