<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\Front\PageController::class, 'index'])->name('home');
Route::get('regulatory-information', [\App\Http\Controllers\Front\PageController::class, 'regulatoryInformation'])->name('regulatory-information');

Route::group(['prefix' => 'how-we-help', 'as' => 'how-we-help.'] ,function () {
    Route::group(['prefix' => 'eap', 'as' => 'eap.'], function () {
        Route::get('/', [\App\Http\Controllers\Front\EAPController::class, 'eap'])->name('index');
        Route::get('/what-is-an-eap', [\App\Http\Controllers\Front\EAPController::class, 'whatIsAnEap'])->name('what-is-an-eap');
        Route::get('/consultancy', [\App\Http\Controllers\Front\EAPController::class, 'consultancy'])->name('consultancy');
        Route::get('/program-strategy-and-design', [\App\Http\Controllers\Front\EAPController::class, 'programStrategyAndDesign'])->name('program-strategy-and-design');
        Route::get('/global-supply-chain-capability', [\App\Http\Controllers\Front\EAPController::class, 'globalSupplyChainCapability'])->name('global-supply-chain-capability');
        Route::get('/project-management', [\App\Http\Controllers\Front\EAPController::class, 'projectManagement'])->name('project-management');
        Route::get('/real-world-data', [\App\Http\Controllers\Front\EAPController::class, 'realWorldData'])->name('real-world-data');
        Route::get('/stakeholder-support', [\App\Http\Controllers\Front\EAPController::class, 'stakeholderSupport'])->name('stakeholder-support');
    });

    Route::group(['prefix' => 'cts', 'as' => 'cts.'], function () {
        Route::get('/', [\App\Http\Controllers\Front\CTSController::class, 'cts'])->name('index');
        Route::get('/global-procurement-network-comparator-rld-supply', [\App\Http\Controllers\Front\CTSController::class, 'globalProcurementNetworkComparatorRldSupply'])->name('global-procurement-network-comparator-rld-supply');
        Route::get('/global-supply-chain-capability', [\App\Http\Controllers\Front\CTSController::class, 'globalSupplyChainCapability'])->name('global-supply-chain-capability');
        Route::get('/project-management', [\App\Http\Controllers\Front\CTSController::class, 'projectManagement'])->name('project-management');
    });

    Route::group(['prefix' => 'aid-dev', 'as' => 'aid-dev.'], function () {
        Route::get('/', [\App\Http\Controllers\Front\AIDDevController::class, 'index'])->name('index');
        Route::get('/global-procurement', [\App\Http\Controllers\Front\AIDDevController::class, 'globalProcurement'])->name('global-procurement');
        Route::get('/global-supply-chain-capability', [\App\Http\Controllers\Front\AIDDevController::class, 'globalSupplyChainCapability'])->name('global-supply-chain-capability');
        Route::get('/kitting', [\App\Http\Controllers\Front\AIDDevController::class, 'kitting'])->name('kitting');
        Route::get('/experience-and-expertise', [\App\Http\Controllers\Front\AIDDevController::class, 'projectManagement'])->name('experience-and-expertise');
    });

    Route::group(['prefix' => 'international-supply-and-unlicensed-imports', 'as' => 'international-supply-and-unlicensed-imports.'], function () {
        Route::get('/', [\App\Http\Controllers\Front\InternationalSupplyAndUnlicensedImportsController::class, 'index'])->name('index');
        Route::get('/reliable-supply', [\App\Http\Controllers\Front\InternationalSupplyAndUnlicensedImportsController::class, 'reliableSupply'])->name('reliable-supply');
        Route::get('/global-distributions', [\App\Http\Controllers\Front\InternationalSupplyAndUnlicensedImportsController::class, 'globalDistributions'])->name('global-distributions');
        Route::get('/project-management', [\App\Http\Controllers\Front\InternationalSupplyAndUnlicensedImportsController::class, 'projectManagement'])->name('project-management');
    });

    Route::group(['prefix' => 'hospital-and-pharmacy-supply', 'as' => 'hospital-and-pharmacy-supply.'], function () {
        Route::get('/', [\App\Http\Controllers\Front\HospitalAndPharmacySupplyController::class, 'index'])->name('index');
        Route::get('/project-management', [\App\Http\Controllers\Front\HospitalAndPharmacySupplyController::class, 'projectManagement'])->name('project-management');
        Route::get('/reliable-supply', [\App\Http\Controllers\Front\HospitalAndPharmacySupplyController::class, 'reliableSupply'])->name('reliable-supply');
        Route::get('/global-distributions', [\App\Http\Controllers\Front\HospitalAndPharmacySupplyController::class, 'globalDistributions'])->name('global-distributions');
    });

    Route::group(['prefix' => 'sexual-health', 'as' => 'sexual-health.'], function () {
        Route::get('/', [\App\Http\Controllers\Front\SexualHealthController::class, 'index'])->name('index');
    });

    Route::group(['prefix' => 'distribution', 'as' => 'distribution.'], function () {
        Route::get('/', [\App\Http\Controllers\Front\DistributionController::class, 'index'])->name('index');
        Route::get('/global-supply-chain-capability', [\App\Http\Controllers\Front\DistributionController::class, 'globalSupplyChainCapability'])->name('global-supply-chain-capability');
        Route::get('/uk-network', [\App\Http\Controllers\Front\DistributionController::class, 'ukNetwork'])->name('uk-network');
        Route::get('/end-to-end-service', [\App\Http\Controllers\Front\DistributionController::class, 'endToEndService'])->name('end-to-end-service');
        Route::get('/stakeholder-support', [\App\Http\Controllers\Front\DistributionController::class, 'stakeholderSupport'])->name('stakeholder-support');
    });
});

Route::group(['prefix' => 'who-you-are', 'as' => 'who-you-are.'] ,function () {
    Route::get('healthcare-professional', [\App\Http\Controllers\Front\WhoYouAreController::class, 'healthcareProfessional'])->name('healthcare-professional');
    Route::get('pharma-and-biotech', [\App\Http\Controllers\Front\WhoYouAreController::class, 'pharmaAndBiotech'])->name('pharma-and-biotech');
    Route::get('wholesaler-distributor', [\App\Http\Controllers\Front\WhoYouAreController::class, 'wholesalerDistributor'])->name('wholesaler-distributor');
    Route::get('aid-and-development', [\App\Http\Controllers\Front\WhoYouAreController::class, 'aidAndDevelopment'])->name('aid-and-development');
    Route::get('patient', [\App\Http\Controllers\Front\WhoYouAreController::class, 'patient'])->name('patient');
    Route::get('private-prescriptions', [\App\Http\Controllers\Front\WhoYouAreController::class, 'privatePrescriptions'])->name('private-prescriptions');
    Route::get('aesthetics', [\App\Http\Controllers\Front\WhoYouAreController::class, 'aesthetics'])->name('aesthetics');
    Route::get('healthcare-professionals-private-prescriptions', [\App\Http\Controllers\Front\WhoYouAreController::class, 'healthcareProfessionalsPrivatePrescriptions'])->name('healthcare-professionals-private-prescriptions');
});

Route::group(['prefix' => 'who-we-are', 'as' => 'who-we-are.'] ,function () {
    Route::get('our-history', [\App\Http\Controllers\Front\WhoWeAreController::class, 'ourHistory'])->name('our-history');
    Route::get('regulatory-compliance', [\App\Http\Controllers\Front\WhoWeAreController::class, 'regulatoryCompliance'])->name('regulatory-compliance');
    /*Route::get('meet-the-team', [\App\Http\Controllers\Front\WhoWeAreController::class, 'meetTheTeam'])->name('meet-the-team');*/
    // Speculative Application
    Route::get('careers', [\App\Http\Controllers\Front\WhoWeAreController::class, 'careers'])->name('careers');
    Route::get('speculative-application', [\App\Http\Controllers\Front\WhoWeAreController::class, 'speculativeApplication'])->name('speculative-application');
    Route::post('speculative-application', [\App\Http\Controllers\Front\WhoWeAreController::class, 'speculativeApplicationFormSubmit'])->name('speculative-application-form.submit');
    Route::post('upload-file', [\App\Http\Controllers\Front\WhoWeAreController::class, 'uploadFile'])->name('upload-file');

    Route::get('social-responsibility', [\App\Http\Controllers\Front\WhoWeAreController::class, 'socialResponsibility'])->name('social-responsibility');

    // Junior Procurement Specialist Application
   /* Route::get('jps-application', [\App\Http\Controllers\Front\WhoWeAreController::class, 'jpsApplication'])->name('jps-application');
    Route::post('jps-application', [\App\Http\Controllers\Front\WhoWeAreController::class, 'jpsApplicationFormSubmit'])->name('jps-application-form.submit');
    Route::post('jps-upload-file', [\App\Http\Controllers\Front\WhoWeAreController::class, 'jpsUploadFile'])->name('jps-upload-file');*/

    /*// UK Admin Associate
    Route::get('uk-regulatory-assistant-application', [\App\Http\Controllers\Front\WhoWeAreController::class, 'UKRegulatoryAssistantApplication'])->name('uk-regulatory-assistant-application');
    Route::post('uk-regulatory-assistant-application', [\App\Http\Controllers\Front\WhoWeAreController::class, 'UKRegulatoryAssistantApplicationFormSubmit'])->name('uk-regulatory-assistant-application-form.submit');
    Route::post('uk-regulatory-assistant-upload-file', [\App\Http\Controllers\Front\WhoWeAreController::class, 'UKRegulatoryAssistantUploadFile'])->name('uk-regulatory-assistant-upload-file');*/

    // Bilingual Customer Service Representative
    /*Route::get('bilingual-customer-service-representative', [\App\Http\Controllers\Front\WhoWeAreController::class, 'BilingualCustomerServiceRepresentative'])->name('bilingual-customer-service-representative');
    Route::post('bilingual-customer-service-representative', [\App\Http\Controllers\Front\WhoWeAreController::class, 'BilingualCustomerServiceRepresentativeSubmit'])->name('bilingual-customer-service-representative-form.submit');
    Route::post('bilingual-customer-upload-file', [\App\Http\Controllers\Front\WhoWeAreController::class, 'BilingualCustomerServiceUploadFile'])->name('bilingual-customer-upload-file');*/

    // UK Responsible Person
    Route::get('responsible-person-application', [\App\Http\Controllers\Front\WhoWeAreController::class, 'ResponsiblePersonApplication'])->name('responsible-person-application');
    Route::post('responsible-person-application', [\App\Http\Controllers\Front\WhoWeAreController::class, 'ResponsiblePersonApplicationFormSubmit'])->name('responsible-person-application-form.submit');
    Route::post('responsible-person-upload-file', [\App\Http\Controllers\Front\WhoWeAreController::class, 'ResponsiblePersonUploadFile'])->name('responsible-person-upload-file');

    // Unlicensed Medicines Executive
    Route::get('unlicensed-medicines-executive', [\App\Http\Controllers\Front\WhoWeAreController::class, 'UnlicensedMedicinesExecutive'])->name('unlicensed-medicines-executive');
    Route::post('unlicensed-medicines-executive', [\App\Http\Controllers\Front\WhoWeAreController::class, 'UnlicensedMedicinesExecutiveFormSubmit'])->name('unlicensed-medicines-executive-form.submit');
    Route::post('unlicensed-medicines-executive-upload-file', [\App\Http\Controllers\Front\WhoWeAreController::class, 'UnlicensedMedicinesExecutiveUploadFile'])->name('unlicensed-medicines-executive-upload-file');

    Route::group(['prefix' => 'media-and-resource-centre', 'as' => 'media-and-resource-centre.'], function () {
        Route::get('/', [\App\Http\Controllers\Front\PostController::class, 'blog'])->name('index');
        Route::get('{category}/{slug}', [\App\Http\Controllers\Front\PostController::class, 'post'])->name('post');
        Route::post('filter', [\App\Http\Controllers\Front\PostController::class, 'filter']);
    });
});

Route::get('connect-with-us', [\App\Http\Controllers\Front\ConnectWithUsController::class, 'index'])->name('connect-with-us');
Route::post('connect-with-us', [\App\Http\Controllers\Front\ConnectWithUsController::class, 'submit'])->name('connect-with-us-form.submit');
Route::post('smartnote-download', [\App\Http\Controllers\Front\PostController::class, 'smartnoteDownload'])->name('smartnote.download');
Route::post('post-download', [\App\Http\Controllers\Front\PostController::class, 'postDownload'])->name('post.download');
Route::post('enquiry-save', [\App\Http\Controllers\Front\PostController::class, 'enquiry'])->name('enquiry.save');



Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'] ,function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('post-search', [\App\Http\Controllers\Admin\AdminController::class, 'postSearch']);

    Route::get('category', \App\Http\Livewire\Category::class)->name('category');
//    Route::get('category/create', \App\Http\Livewire\CreateCategory::class)->name('category.create');
//    Route::get('category/{id}/edit', \App\Http\Livewire\EditCategory::class)->name('category.edit');
    Route::get('tag', \App\Http\Livewire\Filter::class)->name('tag');
    Route::get('post', \App\Http\Livewire\Post::class)->name('post');
    Route::get('post/create', \App\Http\Livewire\CreatePost::class)->name('post.create');
    Route::get('post/{id}/edit', \App\Http\Livewire\EditPost::class)->name('post.edit');
    Route::get('smartnotes-form-data', \App\Http\Livewire\SmartNotesFormDataTable::class)->name('smartnotes-form-data');
    Route::get('contact-form-data', \App\Http\Livewire\ContactUsFormDataTable::class)->name('contact-form-data');
    Route::get('enquiry', \App\Http\Livewire\EnquiryTable::class)->name('enquiry');
});
