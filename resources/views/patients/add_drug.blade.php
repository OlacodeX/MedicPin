@extends('layouts.main')

@section('content')
@include('inc.navmain')




     <!-- Page Content  -->
     <div>
        <div class="">
           <div class="row">
              <div class="col-lg-3">
                    <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Drug Cover Image</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                        @include('inc.messages')
                        {!! Form::open(['action' => 'PatientsController@store_drug', 'method' => 'POST', 'enctype' => 'multipart/form-data']) /** The action should be the block of code in the store function in PostsController
                        **/ !!}
                       
                          <div class="form-group">
                                <div class="add-img-user profile-img-edit">
                                   <div class="p-image">
                                      <h5 class="upload-button">Image upload</h5> 
                                     <br><input class="iq-bg-primary" type="file" accept="image/*" name="img">
                                  </div>
                                </div>
                                <style>
                                   input.iq-bg-primary{
                                      width: 200px;
                                   }
                                </style>
                               <div class="img-extension mt-3">
                                  <div class="d-inline-block align-items-center">
                                      <span>Only</span>
                                     <a href="javascript:void();">.jpg</a>
                                     <a href="javascript:void();">.png</a>
                                     <a href="javascript:void();">.jpeg</a>
                                     <span>allowed</span>
                                  </div>
                               </div>
                             </div>
                             <!----
                             <div class="form-group">
                                <label>User Role:</label>
                                <select class="form-control" id="selectuserrole">
                                   <option>Select</option>
                                   <option>Doctor</option>
                                   <option>Patient</option>
                                </select>
                             </div>---->
                              <!-- 
                             <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" id="selectuserrole" name="gender">
                                   <option>Select</option>
                                   <option value="Male">Male</option>
                                   <option value="Female">Female</option>
                                </select>
                             </div> -->
                       </div>
                    </div>
              </div>
              <div class="col-lg-9">
                    <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">New Drug Information</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                          <div class="new-user-info">
                                <div class="row">
                                   <div class="form-group col-md-6">
                                      <label for="name">Name:</label>
                                      <div class="inner-addon right-addon">
                                          <i class="fa fa-user"></i>
                                      <input type="text" class="form-control" id="name" name="name" placeholder="Drug Name">
                                      </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="category">Category:</label>
                                      <select class="form-control" id="selectcat" name="category">
                                         <option>--Select Drug--</option>
                                         <option value="5-alpha-reductase inhibitors">5-alpha-reductase inhibitors</option>
                                         <option value="5-aminosalicylates">5-aminosalicylates</option>
                                         <option value="5HT3 receptor antagonists">5HT3 receptor antagonists</option>
                                         <option value="Ace inhibitors with calcium channel blocking agents">Ace inhibitors with calcium channel blocking agents</option>
                                         <option value="Ace inhibitors with thiazides">Ace inhibitors with thiazides</option>
                                         <option value="Adamantane antivirals">Adamantane antivirals</option>
                                         <option value="Adrenal cortical steroids"> Adrenal cortical steroids</option>
                                         <option value="Adrenal corticosteroid inhibitors"> Adrenal corticosteroid inhibitors</option>
                                         <option value="Adrenergic bronchodilators">Adrenergic bronchodilators</option>
                                         <option value="Agents for hypertensive emergencies">Agents for hypertensive emergencies</option>
                                         <option value="Agents for pulmonary hypertension">Agents for pulmonary hypertension</option>
                                         <option value="Aldosterone receptor antagonists">Aldosterone receptor antagonists</option>
                                         <option value="Alkylating agents">Alkylating agents</option>
                                         <option value="Allergenics">Allergenics</option>
                                         <option value="Alpha-glucosidase inhibitors">Alpha-glucosidase inhibitors</option>
                                         <option value="Alternative medicines">Alternative medicines</option>
                                         <option value="Amebicides">Amebicides</option>
                                         <option value="Aminoglycosides">Aminoglycosides</option>
                                         <option value="Aminopenicillins">Aminopenicillins</option>
                                         <option value="Ampa receptor antagonists">Ampa receptor antagonists</option>
                                         <option value="Analgesic combinations">Analgesic combinations</option>
                                         <option value="Antibiotics/antineoplastics">Antibiotics/antineoplastics</option>
                                         <option value="Anticholinergic antiemetics">Anticholinergic antiemetics</option>
                                         <option value="Anticholinergic antiparkinson agents">Anticholinergic antiparkinson agents</option>
                                         <option value="Anticholinergic bronchodilators">Anticholinergic bronchodilators </option>
                                         <option value="Anticholinergic chronotropic agents">Anticholinergic chronotropic agents</option>
                                         <option value="Angiotensin ii inhibitors with thiazides">Angiotensin ii inhibitors with thiazides</option>
                                         <option value="Angiotensin receptor blockers">Angiotensin receptor blockers</option>
                                         <option value="Angiotensin receptor blockers and neprilysin inhibitors">Angiotensin receptor blockers and neprilysin inhibitors</option>
                                         <option value="Anorectal preparations">Anorectal preparations</option>
                                         <option value="Anorexiants">Anorexiants</option>
                                         <option value="Antacids">Antacids</option>
                                         <option value="Anthelmintics">Anthelmintics</option>
                                         <option value="Anticholinergics/antispasmodics">Anticholinergics/antispasmodics</option>
                                         <option value="Anti-infectives">Anti-infectives</option>
                                         <option value="Anti-pd-1 monoclonal antibodies">Anti-pd-1 monoclonal antibodies</option>
                                         <option value="Antiadrenergic agents (central) with thiazides">Antiadrenergic agents (central) with thiazides</option>
                                         <option value="Antiadrenergic agents (peripheral) with thiazides">Antiadrenergic agents (peripheral) with thiazides</option>
                                         <option value="Angiotensin ii inhibitors with thiazides">Angiotensin ii inhibitors with thiazides</option>
                                         <option value="Antiadrenergic agents, centrally acting">Antiadrenergic agents, centrally acting</option>
                                         <option value="Antiadrenergic agents, peripherally acting">Antiadrenergic agents, peripherally acting</option>
                                         <option value="Antiandrogens">Antiandrogens</option>
                                         <option value="Antianginal agents">Antianginal agents</option>
                                         <option value="Antiarrhythmic agents">Antiarrhythmic agents</option>
                                         <option value="Antiasthmatic combinations">Antiasthmatic combinations</option>
                                         <option value="Anticoagulant reversal agents">Anticoagulant reversal agents</option>
                                         <option value="Anticoagulants">Anticoagulants</option>
                                         <option value="Anticonvulsants">Anticonvulsants</option>
                                         <option value="Antidepressants">Antidepressants</option>
                                         <option value="Antidiabetic agents">Antidiabetic agents</option>
                                         <option value="Antidiabetic combinations">Antidiabetic combinations</option>
                                         <option value="Antidiarrheals">Antidiarrheals</option>
                                         <option value="Antidiuretic hormones">Antidiuretic hormones</option>
                                         <option value="Antidotes">Antidotes</option>
                                         <option value="Antiemetic/antivertigo agents">Antiemetic/antivertigo agents</option>
                                         <option value="Antifungals">Antifungals</option>
                                         <option value="Antigonadotropic agents">Antigonadotropic agents</option>
                                         <option value="Antigout agents">Antigout agents</option>
                                         <option value="Antihistamines">Antihistamines</option>
                                         <option value="Antihyperlipidemic agents">Antihyperlipidemic agents</option>
                                         <option value="Antihyperlipidemic combinations">Antihyperlipidemic combinations</option>
                                         <option value="Antihypertensive combinations">Antihypertensive combinations</option>
                                         <option value="Antihyperuricemic agents">Antihyperuricemic agents</option>
                                         <option value="Antimalarial agents">Antimalarial agents</option>
                                         <option value="Antimalarial combinations">Antimalarial combinations</option>
                                         <option value="Antimalarial quinolines">Antimalarial quinolines</option>
                                         <option value="Antimanic agents">Antimanic agents</option>
                                         <option value="Antimetabolites">Antimetabolites</option>
                                         <option value="Antimigraine agents">Antimigraine agents</option>
                                         <option value="Antineoplastic combinations">Antineoplastic combinations</option>
                                         <option value="Antineoplastic detoxifying agents">Antineoplastic detoxifying agents</option>
                                         <option value="Antineoplastic interferons">Antineoplastic interferons</option>
                                         <option value="Antineoplastics">Antineoplastics</option>
                                         <option value="Antiparkinson agents">Antiparkinson agents</option>
                                         <option value="Antiplatelet agents">Antiplatelet agents</option>
                                         <option value="Antipseudomonal penicillins">Antipseudomonal penicillins</option>
                                         <option value="Antipsoriatics">Antipsoriatics</option>
                                         <option value="Antipsychotics">Antipsychotics</option>
                                         <option value="Antirheumatics">Antirheumatics</option>
                                         <option value="Antiseptic and germicides">Antiseptic and germicides</option>
                                         <option value="Antithyroid agents">Antithyroid agents</option>
                                         <option value="Antitoxins and antivenins">Antitoxins and antivenins</option>
                                         <option value="Antituberculosis agents">Antituberculosis agents</option>
                                         <option value="Antituberculosis combinations">Antituberculosis combinations</option>
                                         <option value="Antitussives">Antitussives</option>
                                         <option value="Antiviral agents">Antiviral agents</option>
                                         <option value="Antiviral boosters">Antiviral boosters</option>
                                         <option value="Antiviral combinations">Antiviral combinations</option>
                                         <option value="Antiviral interferons">Antiviral interferons</option>
                                         <option value="Anxiolytics, sedatives, and hypnotics">Anxiolytics, sedatives, and hypnotics</option>
                                         <option value="Aromatase inhibitors">Aromatase inhibitors</option>
                                         <option value="Atypical antipsychotics">Atypical antipsychotics</option>
                                         <option value="Azole antifungals">Azole antifungals</option>
                                         <option value="Bacterial vaccines">Bacterial vaccines</option>
                                         <option value="Barbiturate anticonvulsants">Barbiturate anticonvulsants</option>
                                         <option value="Barbiturates">Barbiturates</option>
                                         <option value="Bcr-abl tyrosine kinase inhibitors">Bcr-abl tyrosine kinase inhibitors</option>
                                         <option value="Benzodiazepine anticonvulsants">Benzodiazepine anticonvulsants</option>
                                         <option value="Benzodiazepines">Benzodiazepines</option>
                                         <option value="Beta blockers with calcium channel blockers">Beta blockers with calcium channel blockers</option>
                                         <option value="Beta blockers with thiazides">Beta blockers with thiazides</option>
                                         <option value="Beta-adrenergic blocking agents">Beta-adrenergic blocking agents</option>
                                         <option value="Beta-lactamase inhibitors">Beta-lactamase inhibitors</option>
                                         <option value="Bile acid sequestrants">Bile acid sequestrants</option>
                                         <option value="Biologicals">Biologicals</option>
                                         <option value="Bisphosphonates">Bisphosphonates</option>
                                         <option value="Bone morphogenetic proteins">Bone morphogenetic proteins</option>
                                         <option value="Bone resorption inhibitors">Bone resorption inhibitors</option>
                                         <option value="Bronchodilator combinations">Bronchodilator combinations</option>
                                         <option value="Bronchodilators">Bronchodilators</option>
                                         <option value="Btk inhibitors">Btk inhibitors</option>
                                         <option value="Calcimimetics">Calcimimetics</option>
                                         <option value="Calcineurin inhibitors">Calcineurin inhibitors</option>
                                         <option value="Calcitonin">Calcitonin</option>
                                         <option value="Calcium channel blocking agents">Calcium channel blocking agents</option>
                                         <option value="Carbamate anticonvulsants">Carbamate anticonvulsants</option>
                                         <option value="Carbapenems">Carbapenems</option>
                                         <option value="Carbapenems/beta-lactamase inhibitors">Carbapenems/beta-lactamase inhibitors</option>
                                         <option value="Carbonic anhydrase inhibitor anticonvulsants">Carbonic anhydrase inhibitor anticonvulsants</option>
                                         <option value="Carbonic anhydrase inhibitors">Carbonic anhydrase inhibitors</option>
                                         <option value="Cardiac stressing agents">Cardiac stressing agents</option>
                                         <option value="Cardioselective beta blockers">Cardioselective beta blockers</option>
                                         <option value="Cardiovascular agents">Cardiovascular agents</option>
                                         <option value="Catecholamines">Catecholamines</option>
                                         <option value="Cation exchange resins">Cation exchange resins</option>
                                         <option value="Cd20 monoclonal antibodies">Cd20 monoclonal antibodies</option>
                                         <option value="Cd30 monoclonal antibodies">Cd30 monoclonal antibodies</option>
                                         <option value="Cd33 monoclonal antibodies">Cd33 monoclonal antibodies</option>
                                         <option value="Cd38 monoclonal antibodies">Cd38 monoclonal antibodies</option>
                                         <option value="Cd52 monoclonal antibodies">Cd52 monoclonal antibodies</option>
                                         <option value="Cdk 4/6 inhibitors">Cdk 4/6 inhibitors</option>
                                         <option value="Central nervous system agents">Central nervous system agents</option>
                                         <option value="Cephalosporins">Cephalosporins</option>
                                         <option value="Cephalosporins/beta-lactamase inhibitors">Cephalosporins/beta-lactamase inhibitors</option>
                                         <option value="Cerumenolytics">Cerumenolytics</option>
                                         <option value="Cftr combinations">Cftr combinations</option>
                                         <option value="Cftr potentiators">Cftr potentiators</option>
                                         <option value="Cgrp inhibitors">Cgrp inhibitors</option>
                                         <option value="Chelating agents">Chelating agents</option>
                                         <option value="Chemokine receptor antagonist">Chemokine receptor antagonist</option>
                                         <option value="Chloride channel activators">Chloride channel activators</option>
                                         <option value="Cholesterol absorption inhibitors">Cholesterol absorption inhibitors</option>
                                         <option value="Cholinergic agonists">Cholinergic agonists</option>
                                         <option value="Cholinergic muscle stimulants">Cholinergic muscle stimulants</option>
                                         <option value="Cholinesterase inhibitors">Cholinesterase inhibitors</option>
                                         <option value="Cns stimulants">Cns stimulants</option>
                                         <option value="Coagulation modifiers">Coagulation modifiers</option>
                                         <option value="Colony stimulating factors">Colony stimulating factors</option>
                                         <option value="Contraceptives">Contraceptives</option>
                                         <option value="Corticotropin">Corticotropin</option>
                                         <option value="Coumarins and indandiones">Coumarins and indandiones</option>
                                         <option value="Cox-2 inhibitors">Cox-2 inhibitors</option>
                                         <option value="Decongestants">Decongestants</option>
                                         <option value="Dermatological agents">Dermatological agents</option>
                                         <option value="Diagnostic radiopharmaceuticals">Diagnostic radiopharmaceuticals</option>
                                         <option value="Diarylquinolines">Diarylquinolines</option>
                                         <option value="Dibenzazepine anticonvulsants">Dibenzazepine anticonvulsants</option>
                                         <option value="Digestive enzymes">Digestive enzymes</option>
                                         <option value="Dipeptidyl peptidase 4 inhibitors">Dipeptidyl peptidase 4 inhibitors</option>
                                         <option value="Diuretics">Diuretics</option>
                                         <option value="Dopaminergic antiparkinsonism agents">Dopaminergic antiparkinsonism agents</option>
                                         <option value="Drugs used in alcohol dependence">Drugs used in alcohol dependence</option>
                                         <option value="Echinocandins">Echinocandins</option>
                                         <option value="Egfr inhibitors">Egfr inhibitors</option>
                                         <option value="Estrogen receptor antagonists">Estrogen receptor antagonists</option>
                                         <option value="Estrogens">Estrogens</option>
                                         <option value="Expectorants">Expectorants</option>
                                         <option value="Factor Xa inhibitors">Factor Xa inhibitors</option>
                                         <option value="Fatty acid derivative anticonvulsants">Fatty acid derivative anticonvulsants</option>
                                         <option value="Fibric acid derivatives">Fibric acid derivatives</option>
                                         <option value="First generation cephalosporins">First generation cephalosporins</option>
                                         <option value="Fourth generation cephalosporins">Fourth generation cephalosporins</option>
                                         <option value="Functional bowel disorder agents">Functional bowel disorder agents</option>
                                         <option value="Gallstone solubilizing agents">Gallstone solubilizing agents</option>
                                         <option value="Gamma-aminobutyric acid analogs">Gamma-aminobutyric acid analogs</option>
                                         <option value="Gamma-aminobutyric acid reuptake inhibitors">Gamma-aminobutyric acid reuptake inhibitors</option>
                                         <option value="Gastrointestinal agents">Gastrointestinal agents</option>
                                         <option value="General anesthetics">General anesthetics</option>
                                         <option value="Genitourinary tract agents">Genitourinary tract agents</option>
                                         <option value="Gi stimulants">Gi stimulants</option>
                                         <option value="Glucocorticoids">Glucocorticoids</option>
                                         <option value="Glucose elevating agents">Glucose elevating agents</option>
                                         <option value="Glycopeptide antibiotics">Glycopeptide antibiotics</option>
                                         <option value="Glycoprotein platelet inhibitors">Glycoprotein platelet inhibitors</option>
                                         <option value="Glycylcyclines">Glycylcyclines</option>
                                         <option value="Gonadotropin releasing hormones">Gonadotropin releasing hormones</option>
                                         <option value="Gonadotropin-releasing hormone antagonists">Gonadotropin-releasing hormone antagonists</option>
                                         <option value="Gonadotropins">Gonadotropins</option>
                                         <option value="Group i antiarrhythmics">Group i antiarrhythmics</option>
                                         <option value="Group ii antiarrhythmics">Group ii antiarrhythmics</option>
                                         <option value="Group iii antiarrhythmics">Group iii antiarrhythmics</option>
                                         <option value="Group iv antiarrhythmics">Group iv antiarrhythmics</option>
                                         <option value="Group v antiarrhythmics"> Group v antiarrhythmics</option>
                                         <option value="Growth hormone receptor blockers">Growth hormone receptor blockers</option>
                                         <option value="Growth hormones">Growth hormones</option>
                                         <option value="Guanylate cyclase-c agonists">Guanylate cyclase-c agonists</option>
                                         <option value="H. Pylori eradication agents">H. Pylori eradication agents</option>
                                         <option value="H2 antagonists">H2 antagonists</option>
                                         <option value="Hedgehog pathway inhibitors">Hedgehog pathway inhibitors</option>
                                         <option value="Hematopoietic stem cell mobilizer">Hematopoietic stem cell mobilizer</option>
                                         <option value="Heparin antagonists">Heparin antagonists</option>
                                         <option value="Heparins">Heparins</option>
                                         <option value="Her2 inhibitors">Her2 inhibitors</option>
                                         <option value="Herbal products">Herbal products</option>
                                         <option value="Histone deacetylase inhibitors">Histone deacetylase inhibitors</option>
                                         <option value="Hormones">Hormones</option>
                                         <option value="Hormones/antineoplastics">Hormones/antineoplastics</option>
                                         <option value="Hydantoin anticonvulsants">Hydantoin anticonvulsants</option>
                                         <option value="Hydrazide derivatives">Hydrazide derivatives</option>
                                         <option value="Illicit (street) drugs">Illicit (street) drugs</option>
                                         <option value="Immune globulins">Immune globulins</option>
                                         <option value="Immunologic agents">Immunologic agents</option>
                                         <option value="Immunostimulants">Immunostimulants</option>
                                         <option value="Immunosuppressive agents">Immunosuppressive agents</option>
                                         <option value="Impotence agents">Impotence agents</option>
                                         <option value="In vivo diagnostic biologicals">In vivo diagnostic biologicals</option>
                                         <option value="Incretin mimetics">Incretin mimetics</option>
                                         <option value="Inhaled anti-infectives">Inhaled anti-infectives</option>
                                         <option value="Inhaled corticosteroids">Inhaled corticosteroids</option>
                                         <option value="Inotropic agents">Inotropic agents</option>
                                         <option value="Insulin">Insulin</option>
                                         <option value="Insulin-like growth factors">Insulin-like growth factors</option>
                                         <option value="Integrase strand transfer inhibitor">Integrase strand transfer inhibitor</option>
                                         <option value="Interferons">Interferons</option>
                                         <option value="Interleukin inhibitors">Interleukin inhibitors</option>
                                         <option value="Interleukins">Interleukins</option>
                                         <option value="Intravenous nutritional products">Intravenous nutritional products</option>
                                         <option value="Investigational drugs">Investigational drugs</option>
                                         <option value="Iodinated contrast media">Iodinated contrast media</option>
                                         <option value="Ionic iodinated contrast media">Ionic iodinated contrast media</option>
                                         <option value="Iron products">Iron products</option>
                                         <option value="Ketolides">Ketolides</option>
                                         <option value="Laxatives">Laxatives</option>
                                         <option value="Leprostatics">Leprostatics</option>
                                         <option value="Leukotriene modifiers">Leukotriene modifiers</option>
                                         <option value="Lincomycin derivatives">Lincomycin derivatives</option>
                                         <option value="Local injectable anesthetics">Local injectable anesthetics</option>
                                         <option value="Local injectable anesthetics with corticosteroids">Local injectable anesthetics with corticosteroids</option>
                                         <option value="Loop diuretics">Loop diuretics</option>
                                         <option value="Lung surfactants">Lung surfactants</option>
                                         <option value="Lymphatic staining agents">Lymphatic staining agents</option>
                                         <option value="Lysosomal enzymes">Lysosomal enzymes</option>
                                         <option value="Macrolide derivatives">Macrolide derivatives</option>
                                         <option value="Macrolides">Macrolides</option>
                                         <option value="Magnetic resonance imaging contrast media">Magnetic resonance imaging contrast media</option>
                                         <option value="Malignancy photosensitizers">Malignancy photosensitizers</option>
                                         <option value="Mast cell stabilizers">Mast cell stabilizers</option>
                                         <option value="Medical gas">Medical gas</option>
                                         <option value="Meglitinides">Meglitinides</option>
                                         <option value="Melanocortin receptor agonists">Melanocortin receptor agonists</option>
                                         <option value="Metabolic agents">Metabolic agents</option>
                                         <option value="Methylxanthines">Methylxanthines</option>
                                         <option value="Mineralocorticoids">Mineralocorticoids</option>
                                         <option value="Minerals and electrolytes">Minerals and electrolytes</option>
                                         <option value="Miscellaneous agents">Miscellaneous agents</option>
                                         <option value="Miscellaneous analgesics">Miscellaneous analgesics</option>
                                         <option value="Miscellaneous antibiotics">Miscellaneous antibiotics</option>
                                         <option value="Miscellaneous anticonvulsants">Miscellaneous anticonvulsants</option>
                                         <option value="Miscellaneous antidepressants">Miscellaneous antidepressants</option>
                                         <option value="Miscellaneous antidiabetic agents">Miscellaneous antidiabetic agents</option>
                                         <option value="Miscellaneous antiemetics">Miscellaneous antiemetics</option>
                                         <option value="Miscellaneous antifungals">Miscellaneous antifungals</option>
                                         <option value="Miscellaneous antihyperlipidemic agents">Miscellaneous antihyperlipidemic agents</option>
                                         <option value="Miscellaneous antihypertensive combinations">Miscellaneous antihypertensive combinations</option>
                                         <option value="Miscellaneous antimalarials">Miscellaneous antimalarials</option>
                                         <option value="Miscellaneous antineoplastics">Miscellaneous antineoplastics</option>
                                         <option value="Miscellaneous antiparkinson agents">Miscellaneous antiparkinson agents</option>
                                         <option value="Miscellaneous antipsychotic agents">Miscellaneous antipsychotic agents</option>
                                         <option value="Miscellaneous antituberculosis agents">Miscellaneous antituberculosis agents</option>
                                         <option value="Miscellaneous antivirals">Miscellaneous antivirals</option>
                                         <option value="Miscellaneous anxiolytics, sedatives and hypnotics">Miscellaneous anxiolytics, sedatives and hypnotics</option>
                                         <option value="Miscellaneous bone resorption inhibitors">Miscellaneous bone resorption inhibitors</option>
                                         <option value="Miscellaneous cardiovascular agents">Miscellaneous cardiovascular agents</option>
                                         <option value="Miscellaneous central nervous system agents">Miscellaneous central nervous system agents</option>
                                         <option value="Miscellaneous coagulation modifiers">Miscellaneous coagulation modifiers</option>
                                         <option value="Miscellaneous diagnostic dyes">Miscellaneous diagnostic dyes</option>
                                         <option value="Miscellaneous diuretics">Miscellaneous diuretics</option>
                                         <option value="Miscellaneous erythropoiesis agents">Miscellaneous erythropoiesis agents</option>
                                         <option value="Miscellaneous genitourinary tract agents">Miscellaneous genitourinary tract agents</option>
                                         <option value="Miscellaneous gi agents">Miscellaneous gi agents</option>
                                         <option value=" Miscellaneous hormones"> Miscellaneous hormones</option>
                                         <option value="Miscellaneous metabolic agents">Miscellaneous metabolic agents</option>
                                         <option value="Miscellaneous ophthalmic agents">Miscellaneous ophthalmic agents</option>
                                         <option value="Miscellaneous otic agents">Miscellaneous otic agents</option>
                                         <option value="Miscellaneous respiratory agents">Miscellaneous respiratory agents</option>
                                         <option value="Miscellaneous sex hormones">Miscellaneous sex hormones</option>
                                         <option value="Miscellaneous topical agents">Miscellaneous topical agents</option>
                                         <option value="Miscellaneous uncategorized agents">Miscellaneous uncategorized agents</option>
                                         <option value="Miscellaneous vaginal agents">Miscellaneous vaginal agents</option>
                                         <option value="Mitotic inhibitors">Mitotic inhibitors</option>
                                         <option value="Monoamine oxidase inhibitors">Monoamine oxidase inhibitors</option>
                                         <option value="Mouth and throat products">Mouth and throat products</option>
                                         <option value="Mtor inhibitors">Mtor inhibitors</option>
                                         <option value="Mucolytics">Mucolytics</option>
                                         <option value="Multikinase inhibitors">Multikinase inhibitors</option>
                                         <option value="Muscle relaxants">Muscle relaxants</option>
                                         <option value="Mydriatics">Mydriatics</option>
                                         <option value="Narcotic analgesic combinations">Narcotic analgesic combinations</option>                                       
                                         <option value="Narcotic analgesics">Narcotic analgesics</option>
                                         <option value="Nasal anti-infectives">Nasal anti-infectives</option>
                                         <option value="Nasal antihistamines and decongestants">Nasal antihistamines and decongestants</option>
                                         <option value="Nasal lubricants and irrigations">Nasal lubricants and irrigations</option>
                                         <option value="Nasal preparations">Nasal preparations</option>
                                         <option value="Nasal steroids">Nasal steroids</option>
                                         <option value="Natural penicillins">Natural penicillins</option>
                                         <option value="Neprilysin inhibitors">Neprilysin inhibitors</option>
                                         <option value="Neuraminidase inhibitors">Neuraminidase inhibitors</option>
                                         <option value="Neuromuscular blocking agents">Neuromuscular blocking agents</option>
                                         <option value="Neuronal potassium channel openers">Neuronal potassium channel openers</option>
                                         <option value="Next generation cephalosporins">Next generation cephalosporins</option>
                                         <option value="Nhe3 inhibitors">Nhe3 inhibitors</option>
                                         <option value="Nicotinic acid derivatives">Nicotinic acid derivatives</option>
                                         <option value="Nk1 receptor antagonists">Nk1 receptor antagonists</option>
                                         <option value="Nnrtis">Nnrtis</option>
                                         <option value="Non-cardioselective beta blockers">Non-cardioselective beta blockers</option>
                                         <option value="Non-iodinated contrast media">Non-iodinated contrast media</option>
                                         <option value="Non-ionic iodinated contrast media">Non-ionic iodinated contrast media</option>
                                         <option value="Non-sulfonylureas">Non-sulfonylureas</option>
                                         <option value="Nonsteroidal anti-inflammatory drugs">Nonsteroidal anti-inflammatory drugs</option>
                                         <option value="Ns5a inhibitors">Ns5a inhibitors</option>
                                         <option value="Nucleoside reverse transcriptase inhibitors (nrtis)">Nucleoside reverse transcriptase inhibitors (nrtis)</option>
                                         <option value="Nutraceutical products">Nutraceutical products</option>
                                         <option value="Nutritional products">Nutritional products</option>
                                         <option value="Ophthalmic anesthetics">Ophthalmic anesthetics</option>
                                         <option value="Ophthalmic anti-infectives">Ophthalmic anti-infectives</option>
                                         <option value="Ophthalmic anti-inflammatory agents">Ophthalmic anti-inflammatory agents</option>
                                         <option value="Ophthalmic antihistamines and decongestants">Ophthalmic antihistamines and decongestants</option>
                                         <option value="Ophthalmic diagnostic agents">Ophthalmic diagnostic agents</option>
                                         <option value="Ophthalmic glaucoma agents">Ophthalmic glaucoma agents</option>
                                         <option value="Ophthalmic lubricants and irrigations">Ophthalmic lubricants and irrigations</option>
                                         <option value="Ophthalmic preparations">Ophthalmic preparations</option>
                                         <option value="Ophthalmic steroids">Ophthalmic steroids</option>
                                         <option value="Ophthalmic steroids with anti-infectives">Ophthalmic steroids with anti-infectives</option>
                                         <option value="Ophthalmic surgical agents">Ophthalmic surgical agents</option>
                                         <option value="Oral nutritional supplements">Oral nutritional supplements</option>
                                         <option value="Other immunostimulants">Other immunostimulants</option>
                                         <option value="Other immunosuppressants">Other immunosuppressants</option>
                                         <option value="Otic anesthetics">Otic anesthetics</option>
                                         <option value="Otic anti-infectives">Otic anti-infectives</option>
                                         <option value="Otic preparations">Otic preparations</option>
                                         <option value="Otic steroids">Otic steroids</option>
                                         <option value="Otic steroids with anti-infectives">Otic steroids with anti-infectives</option>
                                         <option value="Oxazolidinedione anticonvulsants">Oxazolidinedione anticonvulsants</option>
                                         <option value="Oxazolidinone antibiotics">Oxazolidinone antibiotics</option>
                                         <option value="Parathyroid hormone and analogs">Parathyroid hormone and analogs</option>
                                         <option value="Parp inhibitors">Parp inhibitors</option>
                                         <option value="Pcsk9 inhibitors">Pcsk9 inhibitors</option>
                                         <option value="Penicillinase resistant penicillins">Penicillinase resistant penicillins</option>
                                         <option value="Penicillins">Penicillins</option>                                       
                                         <option value="Peripheral opioid receptor antagonists">Peripheral opioid receptor antagonists</option>
                                         <option value="Peripheral opioid receptor mixed agonists/antagonists">Peripheral opioid receptor mixed agonists/antagonists</option>
                                         <option value="Peripheral vasodilators">Peripheral vasodilators</option>
                                         <option value="Peripherally acting antiobesity agents">Peripherally acting antiobesity agents</option>
                                         <option value="Phenothiazine antiemetics">Phenothiazine antiemetics</option>
                                         <option value="Phenothiazine antipsychotics">Phenothiazine antipsychotics</option>
                                         <option value="Phenylpiperazine antidepressants">Phenylpiperazine antidepressants</option>
                                         <option value="Phosphate binders">Phosphate binders</option>
                                         <option value="Pi3k inhibitors">Pi3k inhibitors</option>
                                         <option value="Plasma expanders">Plasma expanders</option>
                                         <option value="Platelet aggregation inhibitors">Platelet aggregation inhibitors</option>
                                         <option value="Platelet-stimulating agents">Platelet-stimulating agents</option>
                                         <option value="Polyenes">Polyenes</option>
                                         <option value="Potassium sparing diuretics with thiazides">Potassium sparing diuretics with thiazides</option>
                                         <option value="Potassium-sparing diuretics">Potassium-sparing diuretics</option>
                                         <option value="Probiotics">Probiotics</option>
                                         <option value="Progesterone receptor modulators">Progesterone receptor modulators</option>
                                         <option value="Progestins">Progestins</option>
                                         <option value="Prolactin inhibitors">Prolactin inhibitors</option>
                                         <option value="Prostaglandin d2 antagonists">Prostaglandin d2 antagonists</option>
                                         <option value="Protease inhibitors">Protease inhibitors</option>
                                         <option value="Protease-activated receptor-1 antagonists">Protease-activated receptor-1 antagonists</option>
                                         <option value="Proteasome inhibitors">Proteasome inhibitors</option>
                                         <option value="Proton pump inhibitors">Proton pump inhibitors</option>
                                         <option value="Psoralens">Psoralens</option>
                                         <option value="Psychotherapeutic agents">Psychotherapeutic agents</option>
                                         <option value="Psychotherapeutic combinations">Psychotherapeutic combinations</option>
                                         <option value="Purine nucleosides">Purine nucleosides</option>
                                         <option value="Pyrrolidine anticonvulsants">Pyrrolidine anticonvulsants</option>
                                         <option value="Quinolones">Quinolones</option>
                                         <option value="Radiocontrast agents">Radiocontrast agents</option>
                                         <option value="Radiologic adjuncts">Radiologic adjuncts</option>
                                         <option value="Radiologic agents">Radiologic agents</option>
                                         <option value="Radiologic conjugating agents">Radiologic conjugating agents</option>
                                         <option value="Radiopharmaceuticals">Radiopharmaceuticals</option>
                                         <option value="Recombinant human erythropoietins">Recombinant human erythropoietins</option>
                                         <option value="Renal replacement solutions">Renal replacement solutions</option>
                                         <option value="Renin inhibitors">Renin inhibitors</option>
                                         <option value="Respiratory agents">Respiratory agents</option>
                                         <option value="Respiratory inhalant products">Respiratory inhalant products</option>
                                         <option value="Rifamycin derivatives">Rifamycin derivatives</option>
                                         <option value="Salicylates">Salicylates</option>
                                         <option value="Sclerosing agents">Sclerosing agents</option>
                                         <option value="Second generation cephalosporins">Second generation cephalosporins</option>
                                         <option value="Selective estrogen receptor modulators">Selective estrogen receptor modulators</option>
                                         <option value="Selective immunosuppressants">Selective immunosuppressants</option>
                                         <option value="Selective phosphodiesterase-4 inhibitors">Selective phosphodiesterase-4 inhibitors</option>
                                         <option value="Selective serotonin reuptake inhibitors">Selective serotonin reuptake inhibitors</option>
                                         <option value="Serotonin-norepinephrine reuptake inhibitors">Serotonin-norepinephrine reuptake inhibitors</option>
                                         <option value="Serotoninergic neuroenteric modulators">Serotoninergic neuroenteric modulators</option>
                                         <option value="Sex hormone combinations">Sex hormone combinations</option>
                                         <option value="Sex hormones">Sex hormones</option>
                                         <option value="Sglt-2 inhibitors">Sglt-2 inhibitors</option>
                                         <option value="Skeletal muscle relaxant combinations">Skeletal muscle relaxant combinations</option>
                                         <option value="Skeletal muscle relaxants">Skeletal muscle relaxants</option>
                                         <option value="Smoking cessation agents">Smoking cessation agents</option>
                                         <option value="Somatostatin and somatostatin analogs">Somatostatin and somatostatin analogs</option>
                                         <option value="Spermicides">Spermicides</option>
                                         <option value="Statins">Statins</option>
                                         <option value="Sterile irrigating solutions">Sterile irrigating solutions</option>
                                         <option value="Streptogramins">Streptogramins</option>
                                         <option value="Streptomyces derivatives">Streptomyces derivatives</option>
                                         <option value="Succinimide anticonvulsants">Succinimide anticonvulsants</option>
                                         <option value="Sulfonamides">Sulfonamides</option>
                                         <option value="Sulfonylureas">Sulfonylureas</option>
                                         <option value="Synthetic ovulation stimulants">Synthetic ovulation stimulants</option>
                                         <option value="Tetracyclic antidepressants">Tetracyclic antidepressants</option>
                                         <option value="Tetracyclines">Tetracyclines</option>
                                         <option value="Therapeutic radiopharmaceuticals">Therapeutic radiopharmaceuticals</option>
                                         <option value="Therapeutic vaccines">Therapeutic vaccines</option>
                                         <option value="Thiazide diuretics">Thiazide diuretics</option>
                                         <option value="Thiazolidinediones">Thiazolidinediones</option>
                                         <option value="Thioxanthenes">Thioxanthenes</option>
                                         <option value="Third generation cephalosporins">Third generation cephalosporins</option>
                                         <option value="Thrombin inhibitors">Thrombin inhibitors</option>
                                         <option value="Thrombolytics">Thrombolytics</option>
                                         <option value="Thyroid drugs">Thyroid drugs</option>
                                         <option value="Tnf alfa inhibitors">Tnf alfa inhibitors</option>
                                         <option value="Tocolytic agents">Tocolytic agents</option>
                                         <option value="Topical acne agents">Topical acne agents</option>
                                         <option value="Topical agents">Topical agents</option>
                                         <option value="Topical allergy diagnostic agents">Topical allergy diagnostic agents</option>
                                         <option value="Topical anesthetics">Topical anesthetics</option>
                                         <option value="Topical anti-infectives">Topical anti-infectives</option>
                                         <option value="Topical anti-rosacea agents">Topical anti-rosacea agents</option>
                                         <option value="Topical antibiotics">Topical antibiotics</option>
                                         <option value="Topical antifungals">Topical antifungals</option>
                                         <option value="Topical antihistamines">Topical antihistamines</option>
                                         <option value="Topical antineoplastics">Topical antineoplastics</option>
                                         <option value="Topical antipsoriatics">Topical antipsoriatics</option>
                                         <option value="Topical antivirals">Topical antivirals</option>
                                         <option value="Topical astringents">Topical astringents</option>
                                         <option value="Topical debriding agents">Topical debriding agents</option>
                                         <option value="Topical depigmenting agents">Topical depigmenting agents</option>
                                         <option value="Topical keratolytics">Topical keratolytics</option>
                                         <option value="Topical emollients">Topical emollients</option>
                                         <option value="Topical non-steroidal anti-inflammatories">Topical non-steroidal anti-inflammatories</option>
                                         <option value="Topical photochemotherapeutics">Topical photochemotherapeutics</option>
                                         <option value="Topical rubefacient">Topical rubefacient</option>
                                         <option value="Topical steroids">Topical steroids</option>
                                         <option value="Topical steroids with anti-infectives">Topical steroids with anti-infectives</option>
                                         <option value="Transthyretin stabilizers">Transthyretin stabilizers</option>
                                         <option value="Triazine anticonvulsants">Triazine anticonvulsants</option>
                                         <option value="Tricyclic antidepressants">Tricyclic antidepressants</option>
                                         <option value="Trifunctional monoclonal antibodies">Trifunctional monoclonal antibodies</option>                                        
                                         <option value="Ultrasound contrast media">Ultrasound contrast media</option>
                                         <option value="Upper respiratory combinations">Upper respiratory combinations</option>
                                         <option value="Urea anticonvulsants">Urea anticonvulsants</option>
                                         <option value="Urea cycle disorder agents">Urea cycle disorder agents</option>
                                         <option value="Urinary anti-infectives">Urinary anti-infectives</option>
                                         <option value="Urinary antispasmodics">Urinary antispasmodics</option>
                                         <option value="Urinary ph modifiers">Urinary ph modifiers</option>
                                         <option value="Uterotonic agents">Uterotonic agents</option>
                                         <option value="Vaccine combinations">Vaccine combinations</option>
                                         <option value="Vaginal anti-infectives">Vaginal anti-infectives</option>
                                         <option value="Vaginal preparations">Vaginal preparations</option>
                                         <option value="Vasodilators">Vasodilators</option>
                                         <option value="Vasopressin antagonists">Vasopressin antagonists</option>
                                         <option value="Vasopressors">Vasopressors</option>
                                         <option value="Vegf/vegfr inhibitors">Vegf/vegfr inhibitors</option>
                                         <option value="Viral vaccines">Viral vaccines</option>
                                         <option value="Visco supplementation agents">Visco supplementation agents</option>
                                         <option value="Vitamin and mineral combinations">Vitamin and mineral combinations</option>
                                         <option value="Vitamins">Vitamins</option>
                                         <option value="Vmat2 inhibitors">Vmat2 inhibitors</option>
                                      </select>
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="mae">Drug Make:</label>
                                      <div class="inner-addon right-addon">
                                          <i class="fa fa-bank"></i>
                                      <input type="text" class="form-control" id="make" name="make" placeholder="Made by which company?">
                                      </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="weight">Weight:</label>
                                      <div class="inner-addon right-addon">
                                          <i class="fa fa-bed"></i>
                                      <input type="text" class="form-control" id="weight" name="weight" placeholder="In milligram (mg)">
                                      </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="price">Price:</label>
                                      <small> Specify in Naira</small>
                                      <div class="inner-addon right-addon">
                                          <i class="fa fa-dollar"></i>
                                      <input type="text" class="form-control" id="price" placeholder="How much do you sell?" name="price">
                                      </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="sell">How do you sell/price?:</label>
                                      <select class="form-control" id="select" name="sell">
                                            <option value="Pack">Pack</option>
                                            <option value="Carton">Carton</option>
                                            <option value="Milligram">Milligram</option>
                                            <option value="Other">Other</option>
                                      </select>
                                   </div>
                                   <div class="form-group col-md-6">
                                    <label for="description">Drug Description:</label>
                                    <textarea class="form-control" id="description" name="describe" placeholder="Drug description"></textarea>
                                   </div>
                                </div>
                                <hr>
                                <!----
                                <h5 class="mb-3">Medical Records</h5>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                       <label for="Blood Group">Blood Group</label>
                                       <select class="form-control" id="selectbg" name="b_group">
                                          <option>Select</option>
                                          <option value="O+">O+</option>
                                          <option value="AB+">AB+</option>
                                          <option value="AB+">AB+</option>
                                          <option value="AB+">AB+</option>
                                          <option value="AB+">AB+</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="bp">Blood Pressure</label>
                                       <input type="text" class="form-control" id="bp" name="bp" placeholder="Blood Pressure">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="h_rate">Heart Rate</label>
                                       <input type="text" class="form-control" id="h_rate" name="h_rate" placeholder="Heart Rate">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="genotype">Genotype</label>
                                       <select class="form-control" id="selectgenotype" name="genotype">
                                          <option>Select</option>
                                          <option value="AA">AA</option>
                                          <option value="AS">AS</option>
                                          <option value="SS">SS</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="weight">Weight</label>
                                       <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="height">Height</label>
                                       <input type="text" class="form-control" id="height" name="height" placeholder="Height">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="temprature">Temperature</label>
                                       <input type="text" class="form-control" id="temprature" name="temprature" placeholder="Temprature">
                                    </div>
                                </div>
                                ----->
                                <button type="submit" class="btn btn-primary">Add Drug</button>
                                {!! Form::close() !!}
                          </div>
                       </div>
                    </div>
              </div>
           </div>
        </div>
     <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer" style="margin-top:80px;">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                       <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                       <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                 </div>
                 <div class="col-lg-6 text-right">
                    Copyright 2020 <a href="#">Medicpin</a> All Rights Reserved.
                 </div>
              </div>
           </div>
        </footer>
@endsection