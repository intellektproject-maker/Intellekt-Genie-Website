/**
 * Intellekt Genie - Agentic AI Solutions Interactive Demonstrations
 * Lightweight, client-side illustrative workflow previews.
 * Uses predefined business rules and sample datasets to illustrate how
 * Agentic AI workflows can be structured for commercial operations.
 */

(function () {
  'use strict';

  /* ==========================================================================
     QUICK-JUMP SELECTOR FOR THE THREE DEMONSTRATIONS
     ========================================================================== */
  function initDemoSelector() {
    var navButtons = document.querySelectorAll('.aai-demo-tab-btn');
    var panels = document.querySelectorAll('.aai-demo-panel');
    if (!navButtons.length || !panels.length) return;

    navButtons.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var targetId = btn.getAttribute('data-target');
        if (!targetId) return;

        navButtons.forEach(function (b) {
          b.classList.remove('is-active');
          b.setAttribute('aria-pressed', 'false');
        });
        btn.classList.add('is-active');
        btn.setAttribute('aria-pressed', 'true');

        panels.forEach(function (panel) {
          panel.classList.toggle('is-active', panel.id === targetId);
        });

        var targetPanel = document.getElementById(targetId);
        if (targetPanel) {
          var navOffset = 92;
          var top = targetPanel.getBoundingClientRect().top + window.pageYOffset - navOffset;
          window.scrollTo({ top: top, behavior: 'smooth' });
        }
      });
    });
  }

  /* ==========================================================================
     DEMO 1: CUSTOMER SUPPORT WORKFLOW
     ========================================================================== */
  var supportPresets = {
    billing: {
      category: 'Billing',
      enquiry: 'Our finance team noticed a duplicate charge on invoice #INV-4082 for our monthly subscription and needs an updated credit note before Friday.'
    },
    technical: {
      category: 'Technical Support',
      enquiry: 'Our warehouse team is unable to sync daily inventory dispatch records with the central portal since 08:30 AM today. Operations are delayed.'
    },
    general: {
      category: 'General Enquiry',
      enquiry: 'We would like to add fifteen new regional staff accounts to our existing workspace and understand the onboarding steps.'
    }
  };

  function evaluateSupportEnquiry() {
    var inputEl = document.getElementById('csEnquiryInput');
    var categoryEl = document.getElementById('csCategorySelect');
    var priorityEl = document.getElementById('csPriorityOutput');
    var routingEl = document.getElementById('csRoutingOutput');
    var responseEl = document.getElementById('csResponseOutput');

    if (!inputEl || !categoryEl || !priorityEl || !routingEl || !responseEl) return;

    var rawText = (inputEl.value || '').trim();
    var category = categoryEl.value || 'General Enquiry';
    var lower = rawText.toLowerCase();

    if (!rawText) {
      priorityEl.textContent = 'Awaiting Input';
      routingEl.textContent = 'Please enter a sample customer enquiry above and select a category to preview the suggested priority and response.';
      responseEl.textContent = 'No enquiry text provided yet. Select a sample preset or type a message to generate a suggested draft response.';
      return;
    }

    var isUrgentKeyword = /urgent|unable|delayed|outage|down|duplicate|error|failed|immediately|blocked/.test(lower);
    var priority = 'Standard Priority (Response Target: Within 24 Hours)';
    var routing = 'Assigned Queue: Client Services Desk (Human review before dispatch)';
    var draft = '';

    if (category === 'Technical Support') {
      if (isUrgentKeyword) {
        priority = 'High Priority (Response Target: Within 1 Hour)';
        routing = 'Assigned Queue: Tier-2 Technical Operations (Escalated for immediate engineer review)';
      } else {
        priority = 'Medium Priority (Response Target: Within 4 Hours)';
        routing = 'Assigned Queue: Technical Support Team';
      }
      draft =
        'Thank you for reporting this technical issue to us.\n\n' +
        'We have logged your message regarding: "' + rawText + '"\n\n' +
        'Our technical support team has prioritised this case (' + priority.split(' (')[0] + ') and is reviewing the affected service logs. ' +
        'A support engineer will provide a status update and resolution steps shortly. If you have any error codes or timestamps to share, please reply directly to this thread.';
    } else if (category === 'Billing') {
      if (isUrgentKeyword || /invoice|refund|credit|duplicate|charge|payment/.test(lower)) {
        priority = 'High Priority - Finance Review (Response Target: Within 4 Business Hours)';
        routing = 'Assigned Queue: Accounts & Billing Verification';
      } else {
        priority = 'Medium Priority (Response Target: Within 8 Business Hours)';
        routing = 'Assigned Queue: Billing Administration';
      }
      draft =
        'Thank you for contacting our billing team.\n\n' +
        'We have received your enquiry: "' + rawText + '"\n\n' +
        'Your request has been routed to our Accounts & Billing specialists for verification against your account ledger. ' +
        'Once verified by our finance team, we will issue the necessary adjustment or documentation and confirm by email.';
    } else {
      if (isUrgentKeyword) {
        priority = 'Medium Priority (Response Target: Within 4 Business Hours)';
        routing = 'Assigned Queue: Account Management Desk';
      }
      draft =
        'Thank you for getting in touch with us.\n\n' +
        'We have noted your enquiry: "' + rawText + '"\n\n' +
        'An account coordinator is reviewing your request and will follow up with the relevant guidance and next steps for your organisation.';
    }

    priorityEl.textContent = priority;
    routingEl.textContent = routing;
    responseEl.textContent = draft;
  }

  function initSupportDemo() {
    var evalBtn = document.getElementById('csEvaluateBtn');
    var resetBtn = document.getElementById('csResetBtn');
    var categoryEl = document.getElementById('csCategorySelect');
    var inputEl = document.getElementById('csEnquiryInput');
    var presetBtns = document.querySelectorAll('[data-cs-preset]');

    if (evalBtn) {
      evalBtn.addEventListener('click', evaluateSupportEnquiry);
    }

    if (categoryEl) {
      categoryEl.addEventListener('change', evaluateSupportEnquiry);
    }

    if (resetBtn && inputEl && categoryEl) {
      resetBtn.addEventListener('click', function () {
        inputEl.value = supportPresets.billing.enquiry;
        categoryEl.value = supportPresets.billing.category;
        evaluateSupportEnquiry();
      });
    }

    presetBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var key = btn.getAttribute('data-cs-preset');
        var preset = supportPresets[key];
        if (!preset || !inputEl || !categoryEl) return;
        categoryEl.value = preset.category;
        inputEl.value = preset.enquiry;
        evaluateSupportEnquiry();
      });
    });

    evaluateSupportEnquiry();
  }

  /* ==========================================================================
     DEMO 2: INTELLIGENT SALES AND MARKETING
     ========================================================================== */
  var salesPresets = {
    operations: {
      name: 'Apex Manufacturing Pvt Ltd',
      category: 'Enterprise Workflow Automation',
      requirement: 'Looking to automate supplier purchase order validation and connect dispatch updates with our internal ERP across three plants.'
    },
    support: {
      name: 'Veridian Retail Group',
      category: 'Customer Experience & Triage',
      requirement: 'Receiving over 400 daily customer emails regarding order tracking and returns; need automated categorisation and draft responses.'
    },
    reporting: {
      name: 'Crestline Logistics SME',
      category: 'Data Consolidation & Reporting',
      requirement: 'Weekly management reports take two days of manual spreadsheet compilation across regional branches.'
    }
  };

  function evaluateSalesLead() {
    var nameEl = document.getElementById('smLeadNameInput');
    var reqEl = document.getElementById('smRequirementInput');
    var catEl = document.getElementById('smCategorySelect');
    var classEl = document.getElementById('smClassificationOutput');
    var stageEl = document.getElementById('smStageOutput');
    var followupEl = document.getElementById('smFollowupOutput');

    if (!nameEl || !reqEl || !catEl || !classEl || !stageEl || !followupEl) return;

    var leadName = (nameEl.value || '').trim() || 'Prospective Organisation';
    var requirement = (reqEl.value || '').trim();
    var category = catEl.value || 'Enterprise Workflow Automation';
    var lower = requirement.toLowerCase();

    if (!requirement) {
      classEl.textContent = 'Awaiting Requirement Details';
      stageEl.textContent = 'Enter a sample business requirement above to view lead classification.';
      followupEl.textContent = 'Please provide a brief business requirement or choose one of the sample presets to see the suggested follow-up plan.';
      return;
    }

    var hasMultiSiteOrScale = /erp|plant|branches|hundreds|400|daily|multi|integration|automated|api|warehouse/.test(lower);
    var classification = 'Qualified Commercial Lead - Custom Solution Fit';
    var readiness = 'Recommended Track: Discovery & Architecture Assessment';
    var followup = '';

    if (category === 'Enterprise Workflow Automation') {
      classification = hasMultiSiteOrScale
        ? 'High-Priority Enterprise Lead - Multi-System Integration'
        : 'Qualified Operations Lead - Workflow Automation';
      readiness = 'Recommended Track: Process Audit & System Integration Blueprint';
      followup =
        '1. Schedule a 45-minute technical discovery session with ' + leadName + ' operations stakeholders.\n' +
        '2. Map existing approval steps, document formats, and system touchpoints.\n' +
        '3. Prepare a phased implementation proposal with human-in-the-loop checkpoints and a clear quotation.';
    } else if (category === 'Customer Experience & Triage') {
      classification = 'High-Impact Service Lead - Customer Support Automation';
      readiness = 'Recommended Track: Support Queue Triage & Response Pilot';
      followup =
        '1. Review sample historical enquiry categories and escalation rules with ' + leadName + '.\n' +
        '2. Define priority routing thresholds and human approval rules for sensitive cases.\n' +
        '3. Present a scoped pilot roadmap and commercial quotation for support workflow integration.';
    } else if (category === 'Data Consolidation & Reporting') {
      classification = 'Qualified Business Intelligence Lead - Reporting Automation';
      readiness = 'Recommended Track: Data Pipeline & Automated Summary Review';
      followup =
        '1. Identify current spreadsheet sources, reporting frequency, and key management metrics for ' + leadName + '.\n' +
        '2. Design an automated data validation and summary generation workflow.\n' +
        '3. Share a tailored implementation timeline and commercial cost estimate.';
    } else {
      classification = 'Advisory Consultation Lead - AI Opportunity Assessment';
      readiness = 'Recommended Track: Initial AI Readiness & Use-Case Workshop';
      followup =
        '1. Arrange an introductory consultation with ' + leadName + ' leadership to discuss operational priorities.\n' +
        '2. Evaluate high-effort manual processes to shortlist two practical starting use cases.\n' +
        '3. Provide an AI Opportunity Assessment summary before committing to full development.';
    }

    classEl.textContent = classification;
    stageEl.textContent = readiness;
    followupEl.textContent = followup;
  }

  function initSalesDemo() {
    var evalBtn = document.getElementById('smEvaluateBtn');
    var resetBtn = document.getElementById('smResetBtn');
    var nameEl = document.getElementById('smLeadNameInput');
    var reqEl = document.getElementById('smRequirementInput');
    var catEl = document.getElementById('smCategorySelect');
    var presetBtns = document.querySelectorAll('[data-sm-preset]');

    if (evalBtn) {
      evalBtn.addEventListener('click', evaluateSalesLead);
    }

    if (catEl) {
      catEl.addEventListener('change', evaluateSalesLead);
    }

    if (resetBtn && nameEl && reqEl && catEl) {
      resetBtn.addEventListener('click', function () {
        nameEl.value = salesPresets.operations.name;
        catEl.value = salesPresets.operations.category;
        reqEl.value = salesPresets.operations.requirement;
        evaluateSalesLead();
      });
    }

    presetBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var key = btn.getAttribute('data-sm-preset');
        var preset = salesPresets[key];
        if (!preset || !nameEl || !reqEl || !catEl) return;
        nameEl.value = preset.name;
        catEl.value = preset.category;
        reqEl.value = preset.requirement;
        evaluateSalesLead();
      });
    });

    evaluateSalesLead();
  }

  /* ==========================================================================
     DEMO 3: BUSINESS DATA INTELLIGENCE
     ========================================================================== */
  var dataAnalysisObjectives = {
    workload: {
      title: 'Manual Workload & Administrative Bottleneck Summary',
      summary:
        'Across the 4 sampled business units (1,430 total monthly enquiries), staff spend 328 hours per month on manual data entry, triage, and report compilation. Customer Support and Order Processing account for 70.7% of all manual administrative hours.',
      insights: [
        'Customer Support logs the highest volume (620 enquiries/month) and 140 manual hours, making automated ticket classification the highest-value starting point.',
        'Order Processing requires 92 manual hours for 340 records (approx. 16.2 minutes of manual handling per order), indicating strong potential for document extraction.',
        'Finance & Invoicing has a lower ticket count (290/month) but requires careful verification, making it suitable for automated draft preparation with human sign-off.'
      ]
    },
    turnaround: {
      title: 'Service Turnaround & Response Efficiency Summary',
      summary:
        'Average turnaround time across all four departments is 12.1 hours. Vendor Onboarding experiences the longest turnaround (18.5 hours) despite having the lowest monthly volume (180 records), pointing to multi-step document verification delays.',
      insights: [
        'Vendor Onboarding turnaround (18.5 hours) is slowed by manual compliance checklist reviews that can be pre-validated automatically.',
        'Customer Support turnaround (11.4 hours) can be reduced for standard enquiries by generating immediate draft replies for common billing and status questions.',
        'Order Processing (9.8 hours) and Finance (8.6 hours) show steady throughput but rely heavily on repetitive cross-checking between spreadsheets and emails.'
      ]
    },
    volume: {
      title: 'Departmental Enquiry Volume & Resource Allocation Summary',
      summary:
        'Total sample volume stands at 1,430 monthly cases across four business functions. Volume is heavily concentrated in front-office Customer Support (43.4%) and Order Processing (23.8%), while back-office Finance and Vendor Onboarding represent 32.8% combined.',
      insights: [
        'Deploying an intake classification workflow for Customer Support and Order Processing would cover 67.1% of all incoming operational volume.',
        'Standardising intake data fields across all four departments would eliminate duplicate manual re-keying between front-office and finance teams.',
        'A phased rollout starting with Customer Support triage allows teams to validate accuracy before expanding to Finance and Vendor Onboarding.'
      ]
    }
  };

  function generateDataIntelligence() {
    var selectEl = document.getElementById('biObjectiveSelect');
    var titleEl = document.getElementById('biSummaryTitleOutput');
    var summaryEl = document.getElementById('biSummaryOutput');
    var listEl = document.getElementById('biInsightsList');

    if (!selectEl || !titleEl || !summaryEl || !listEl) return;

    var key = selectEl.value || 'workload';
    var data = dataAnalysisObjectives[key] || dataAnalysisObjectives.workload;

    titleEl.textContent = data.title;
    summaryEl.textContent = data.summary;

    listEl.innerHTML = '';
    data.insights.forEach(function (item) {
      var li = document.createElement('li');
      li.textContent = item;
      listEl.appendChild(li);
    });
  }

  function initDataIntelligenceDemo() {
    var genBtn = document.getElementById('biGenerateBtn');
    var selectEl = document.getElementById('biObjectiveSelect');
    var quickBtns = document.querySelectorAll('[data-bi-objective]');

    if (genBtn) {
      genBtn.addEventListener('click', generateDataIntelligence);
    }

    if (selectEl) {
      selectEl.addEventListener('change', generateDataIntelligence);
    }

    quickBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var obj = btn.getAttribute('data-bi-objective');
        if (!obj || !selectEl) return;
        selectEl.value = obj;
        generateDataIntelligence();
      });
    });

    generateDataIntelligence();
  }

  /* ==========================================================================
     INITIALISE ON DOM READY
     ========================================================================== */
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function () {
      initDemoSelector();
      initSupportDemo();
      initSalesDemo();
      initDataIntelligenceDemo();
    });
  } else {
    initDemoSelector();
    initSupportDemo();
    initSalesDemo();
    initDataIntelligenceDemo();
  }
})();
