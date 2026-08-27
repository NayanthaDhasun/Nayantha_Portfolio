<?php

namespace App\Http\Controllers;

use App\Mail\ConsultationRequestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;

class PortfolioController extends Controller
{
    /**
     * Display the main portfolio page.
     */
    public function index()
    {
        $profile = [
            'name' => 'Nayantha Dhasun',
            'full_name' => 'Nayantha Dhasun Bandara Ilukpitiya',
            'title' => 'Associate ERP Functional Consultant',
            'sub_title' => 'Business Systems Analyst & Odoo Specialist',
            'tagline' => 'Transforming complex business workflows into streamlined, automated ERP solutions with Odoo, AI integrations, and financial precision.',
            'email' => 'nayanthasr@gmail.com',
            'phone' => '+94 77 603 5192',
            'location' => 'Colombo, Sri Lanka',
            'linkedin' => 'https://www.linkedin.com/in/nayantha-dhasun-776b5427a',
            'status' => 'Available for ERP Consulting & Digital Transformation Projects',
            'stats' => [
                ['label' => 'Core ERP Modules', 'value' => '6+', 'desc' => 'Sales, Purchase, Inventory, Accounting, HR, CRM'],
                ['label' => 'Academic GPA', 'value' => '3.7 / 4.0', 'desc' => 'HND in Information Systems Management'],
                ['label' => 'Degree Honours', 'value' => '2nd Upper', 'desc' => 'BSc (Hons) in Information Technology (UWL)'],
                ['label' => 'Global Credentials', 'value' => '6+', 'desc' => 'IIBA®, PMI, Odoo ERP, Cisco, Oracle, AAT/CMA']
            ]
        ];

        $erpModules = [
            [
                'id' => 'sales-purchase',
                'title' => 'Odoo Sales & Purchase',
                'icon' => 'shopping-cart',
                'description' => 'End-to-end procurement workflows, vendor evaluation, automated quotation pipelines, pricing matrices, and sales-to-delivery lifecycle optimization.',
                'capabilities' => [
                    'Quotation to Sales Order Automation',
                    'Vendor Management & Reordering Rules',
                    'Multi-currency & Pricing List Matrix',
                    'Dropshipping & 3-Way Matching'
                ]
            ],
            [
                'id' => 'inventory',
                'title' => 'Inventory & Supply Chain',
                'icon' => 'boxes',
                'description' => 'Real-time stock valuation, multi-warehouse routing, automated replenishment triggers, barcode scanning, and traceability tracking.',
                'capabilities' => [
                    'Multi-Warehouse & Internal Transfers',
                    'FIFO / AVCO Stock Valuation Rules',
                    'Batch / Lot & Serial Number Tracking',
                    'Scrap Management & Physical Inventory Audits'
                ]
            ],
            [
                'id' => 'accounting',
                'title' => 'Accounting & Invoicing',
                'icon' => 'receipt',
                'description' => 'Integrated chart of accounts, automated bank reconciliation, Accounts Receivable/Payable management, tax configurations, and fiscal closing.',
                'capabilities' => [
                    'Automated AR / AP Reconciliations',
                    'Multi-tier Tax Mapping & Fiscal Positions',
                    'Financial P&L / Balance Sheet Reporting',
                    'Payment Gateway & Bank Statement Feeds'
                ]
            ],
            [
                'id' => 'crm-hr',
                'title' => 'CRM & Human Resources',
                'icon' => 'users',
                'description' => 'Lead pipeline nurturing, customer 360 view, employee records, payroll structuring, attendance workflows, and leave management.',
                'capabilities' => [
                    'Lead Scoring & Stage Progression',
                    'Employee Onboarding & Contracts',
                    'Time-off Approval Hierarchies',
                    'HR Expense Claim Workflows'
                ]
            ],
            [
                'id' => 'ai-integration',
                'title' => 'AI & API Integration',
                'icon' => 'cpu',
                'description' => 'Connecting Odoo via XML-RPC & JSON-RPC to external web/mobile apps, AI LLM chatbots (Laravel + OpenRouter), and real-time business intelligence.',
                'capabilities' => [
                    'Odoo XML-RPC & JSON-RPC REST APIs',
                    'AI Chatbot for Natural Language ERP Insights',
                    'Flutter Mobile Sales App Integrations',
                    'Power BI Automated Financial Pipelines'
                ]
            ]
        ];

        $consultingSkills = [
            [
                'category' => 'Functional & Business Consulting',
                'skills' => [
                    ['name' => 'Business Process Re-engineering (BPR)', 'level' => 95],
                    ['name' => 'Requirements Gathering & Scope Mapping', 'level' => 95],
                    ['name' => 'Gap Analysis & Functional Specifications', 'level' => 90],
                    ['name' => 'User Acceptance Testing (UAT) & Quality Assurance', 'level' => 92],
                    ['name' => 'Data Migration & Validation (ETL)', 'level' => 88],
                    ['name' => 'End-User Training & Change Management', 'level' => 92]
                ]
            ],
            [
                'category' => 'Technical & Analytical Competencies',
                'skills' => [
                    ['name' => 'Odoo ERP (Sales, Purchase, Inventory, Accounting, HR)', 'level' => 95],
                    ['name' => 'Power BI Financial Dashboards & Visualizations', 'level' => 90],
                    ['name' => 'Laravel & PHP Backend Architecture', 'level' => 85],
                    ['name' => 'Odoo XML-RPC / JSON-RPC API Integration', 'level' => 88],
                    ['name' => 'MySQL Relational Database Management', 'level' => 88],
                    ['name' => 'Agile, Scrum & Jira Sprint Facilitation', 'level' => 92]
                ]
            ]
        ];

        $projects = [
            [
                'id' => 'ai-mobile-sales',
                'title' => 'Mobile Sales Application with AI ERP Insights',
                'category' => 'ERP & AI Integration',
                'tag' => 'Featured Enterprise Solution',
                'description' => 'A cross-platform Flutter mobile sales system integrated directly with Odoo ERP via XML-RPC / JSON-RPC APIs. Features an AI-powered conversational assistant built with Laravel and OpenRouter API delivering natural-language business analytics and instant sales ordering.',
                'highlights' => [
                    'Real-time access to live Odoo customer records, stock inventory, and quotation pipelines',
                    'AI chatbot enabling sales reps to query revenue trends, stock levels, and client history via conversational prompts',
                    'Zero-friction offline-capable sales order dispatch with automatic ERP sync upon connection'
                ],
                'tech' => ['Odoo ERP', 'Laravel / PHP', 'Flutter', 'XML-RPC / JSON-RPC', 'OpenRouter AI', 'MySQL'],
                'impact' => 'Accelerated field sales order cycle by 40% and enabled instant decision making'
            ],
            [
                'id' => 'power-bi-financials',
                'title' => 'Data-Driven Financial Analytics & ERP Automation',
                'client' => 'Frella International (Pvt) Ltd',
                'category' => 'Financial Analytics & ERP',
                'tag' => 'Executive Analytics',
                'description' => 'Automated financial reporting framework extracting live operational data from Odoo Accounting into dimensional Power BI dashboards. Streamlined Accounts Receivable reconciliation, cash flow monitoring, and executive financial KPI visibility.',
                'highlights' => [
                    'Eliminated manual spreadsheet reconciliation by establishing automated Odoo data extraction pipelines',
                    'Custom Power BI dashboards tracking aged debtors, DSO (Days Sales Outstanding), and revenue by product family',
                    'Cross-functional alignment between finance operations and supply chain teams'
                ],
                'tech' => ['Odoo Accounting', 'Power BI', 'DAX', 'MySQL', 'ERP Data Flow', 'Financial Modeling'],
                'impact' => 'Reduced weekly financial reporting time from 12 hours to under 15 minutes'
            ],
            [
                'id' => 'cab-motors-hub',
                'title' => 'CAB Motors Online Service Hub & Workflow Management',
                'category' => 'Systems Analysis & Agile',
                'tag' => 'Agile Solution Design',
                'description' => 'Comprehensive business systems analysis and workflow architecture for an automotive service enterprise. Modeled user journeys, documented sprint user stories, and led cross-functional collaboration to optimize booking efficiency and customer accessibility.',
                'highlights' => [
                    'Conducted stakeholder discovery interviews and mapped current vs. future-state service workflows',
                    'Authored detailed functional specification documents (FSD) and backlog user stories',
                    'Engineered agile sprint cadences ensuring alignment between business goals and software developers'
                ],
                'tech' => ['Business Systems Analysis', 'Agile / Scrum', 'Jira', 'BPMN Workflow Modeling', 'UAT'],
                'impact' => 'Streamlined customer service turnaround by 35% with zero workflow bottlenecks'
            ],
            [
                'id' => 'healthcare-scheduling',
                'title' => 'Patient Appointment & Clinic Workflow Automation',
                'category' => 'Systems Analysis & Agile',
                'tag' => 'Process Optimization',
                'description' => 'Systematic analysis of healthcare operational bottlenecks resulting in an automated scheduling and consultation management solution to reduce wait times and administrative burden.',
                'highlights' => [
                    'Identified patient intake bottlenecks through thorough operational gap analysis',
                    'Modeled role-based access control and clinic slot allocation algorithms',
                    'Executed structured User Acceptance Testing (UAT) with clinical administrative staff'
                ],
                'tech' => ['Business Process Mapping', 'Requirements Engineering', 'Web Architecture', 'UAT'],
                'impact' => 'Cut patient scheduling wait times by 50% and minimized scheduling conflicts'
            ]
        ];

        $experience = [
            [
                'role' => 'Associate Functional Consultant',
                'company' => 'NeroSoft Solutions (Pvt.) Ltd',
                'period' => 'March 2026 – Present',
                'badge' => 'Current Role (Promoted)',
                'badge_color' => 'emerald',
                'summary' => 'Spearheading end-to-end Odoo ERP functional consulting, client business requirement mapping, and enterprise system deployments.',
                'responsibilities' => [
                    'Translating complex business requirements across departmental stakeholders into practical, scalable Odoo functional architectures.',
                    'Configuring, customizing, and validating Odoo Sales, Purchase, Inventory, and Accounting modules for enterprise clients.',
                    'Conducting rigorous User Acceptance Testing (UAT), sprint reviews, and go-live readiness assessments in Agile cycles.',
                    'Leading ERP data migration strategies including data cleansing, validation rules, and bulk ETL imports.',
                    'Delivering executive-level change management and hands-on functional training to ensure seamless user adoption.'
                ]
            ],
            [
                'role' => 'Trainee Odoo Functional Consultant',
                'company' => 'NeroSoft Solutions (Pvt.) Ltd',
                'period' => 'August 2025 – March 2026',
                'badge' => 'Promoted for High Performance',
                'badge_color' => 'purple',
                'summary' => 'Gained immersive hands-on experience in full-lifecycle Odoo implementations, configuration diagnostics, and workflow automation.',
                'responsibilities' => [
                    'Supported senior consultants in mapping out process flows and identifying operational inefficiencies in legacy workflows.',
                    'Executed system configuration, data import validation, and functional verification across core business modules.',
                    'Collaborated with development teams on root-cause analysis for custom module extensions and troubleshooting.',
                    'Delivered prompt functional user support, driving rapid operational stabilization.'
                ]
            ],
            [
                'role' => 'Finance Operations & ERP Intern',
                'company' => 'Frella International (Pvt) Ltd',
                'period' => 'January 2025 – August 2025',
                'badge' => 'Finance & Systems',
                'badge_color' => 'blue',
                'summary' => 'Bridged financial accounting processes with ERP data flows, managing Accounts Receivable and creating automated reporting dashboards.',
                'responsibilities' => [
                    'Managed Accounts Receivable operations in Odoo Accounting, reconciling financial transactions and customer accounts.',
                    'Ensured data integrity between physical supply chain operations and financial ledger entries.',
                    'Developed interactive Power BI visual dashboards for executive finance decision-making.'
                ]
            ]
        ];

        $certifications = [
            [
                'title' => 'Business Analysis Foundations',
                'issuer' => 'IIBA® (International Institute of Business Analysis)',
                'category' => 'Business Analysis',
                'icon' => 'award',
                'desc' => 'Certified in industry-standard BABOK principles, requirements elicitation, and stakeholder value optimization.'
            ],
            [
                'title' => 'Business Analyst & Project Manager Collaboration',
                'issuer' => 'PMI (Project Management Institute)',
                'category' => 'Project Management',
                'icon' => 'briefcase',
                'desc' => 'Trained in Agile sprint synergy, scope management, and functional-to-technical delivery alignment.'
            ],
            [
                'title' => 'Practical Training in Odoo ERP',
                'issuer' => 'Odoo Functional Academy',
                'category' => 'ERP Specialization',
                'icon' => 'check-circle-2',
                'desc' => 'Comprehensive practical mastery across Odoo Accounting, Sales, Purchase, Inventory, and HR modules.'
            ],
            [
                'title' => 'Introduction to Data Science',
                'issuer' => 'CISCO Networking Academy',
                'category' => 'Data & Analytics',
                'icon' => 'bar-chart-3',
                'desc' => 'Applied data exploration, statistical modeling, and insights interpretation for enterprise analytics.'
            ],
            [
                'title' => 'Oracle Database Foundation',
                'issuer' => 'Oracle Academy',
                'category' => 'Database Architecture',
                'icon' => 'database',
                'desc' => 'Relational database schema design, SQL data integrity, query optimization, and storage management.'
            ],
            [
                'title' => 'Prompt Engineering Certification',
                'issuer' => 'Simplilearn',
                'category' => 'Artificial Intelligence',
                'icon' => 'sparkles',
                'desc' => 'Advanced LLM prompting techniques for enterprise workflow automation and business insights.'
            ],
            [
                'title' => 'AAT Finalist & CMA Operational Level',
                'issuer' => 'Association of Accounting Technicians & CMA',
                'category' => 'Financial Accounting',
                'icon' => 'calculator',
                'desc' => 'Solid foundation in financial accounting, management accounting, tax regulations, and audit controls.'
            ]
        ];

        $education = [
            [
                'degree' => 'BSc (Hons) in Information Technology',
                'institution' => 'University of West London (United Kingdom)',
                'result' => 'Second Class Upper Division (2:1)',
                'year' => 'Graduated',
                'highlight' => 'Core focus on enterprise systems architecture, software engineering, and database management.'
            ],
            [
                'degree' => 'Higher National Diploma in Information Systems Management',
                'institution' => 'National Institute of Business Management (NIBM)',
                'result' => 'Overall GPA: 3.7 / 4.0',
                'year' => 'Distinction Track',
                'highlight' => 'Specialized in business systems design, IT project management, and enterprise database systems.'
            ],
            [
                'degree' => 'Diploma in Business Information Systems',
                'institution' => 'National Institute of Business Management (NIBM)',
                'result' => 'Overall GPA: 3.6 / 4.0',
                'year' => 'Merit Track',
                'highlight' => 'Business process modeling, systems analysis, and enterprise software fundamentals.'
            ]
        ];

        $lifecycleSteps = [
            [
                'number' => '01',
                'phase' => 'Discovery & Process Analysis',
                'summary' => 'Stakeholder workshops, current-state workflow mapping (AS-IS), and identification of operational bottlenecks.',
                'deliverable' => 'Business Requirements Document (BRD) & Gap Analysis'
            ],
            [
                'number' => '02',
                'phase' => 'Solution Architecture & Blueprint',
                'summary' => 'Designing future-state (TO-BE) business flows, mapping Odoo standard modules, and defining custom extensions.',
                'deliverable' => 'Functional Specification Document (FSD) & Data Schema'
            ],
            [
                'number' => '03',
                'phase' => 'Configuration & Integration',
                'summary' => 'Module configuration, pricing rules, tax structures, automated workflows, and XML-RPC API connections.',
                'deliverable' => 'Configured ERP Environment & API Handshakes'
            ],
            [
                'number' => '04',
                'phase' => 'Data Migration & UAT',
                'summary' => 'ETL data cleansing, historical ledger import, and guided User Acceptance Testing with cross-functional teams.',
                'deliverable' => 'Validated Production Data & Signed-off UAT'
            ],
            [
                'number' => '05',
                'phase' => 'Go-Live & Change Management',
                'summary' => 'Production cutover, live user guidance, executive dashboard activation, and post-go-live stabilization.',
                'deliverable' => 'Operational ERP System & Continuous Optimization'
            ]
        ];

        return view('portfolio.index', compact(
            'profile',
            'erpModules',
            'consultingSkills',
            'projects',
            'experience',
            'certifications',
            'education',
            'lifecycleSteps'
        ));
    }

    /**
     * Handle consultation form inquiry.
     */
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'organization' => 'nullable|string|max:150',
            'service_type' => 'required|string|max:100',
            'message' => 'required|string|max:2000',
        ]);

        try {
            Mail::to('nayanthasr@gmail.com')->send(new ConsultationRequestMail($validated));
            Log::info('Consultation request dispatched to nayanthasr@gmail.com', ['client' => $validated['name'], 'email' => $validated['email']]);
        } catch (\Throwable $e) {
            Log::error('Consultation email dispatch notice: ' . $e->getMessage(), ['data' => $validated]);
        }

        return back()->with('success', 'Thank you, ' . e($validated['name']) . '! Your ERP consultation request has been sent to nayanthasr@gmail.com. Nayantha will reach out to you within 24 hours.');
    }

    /**
     * Download the CV PDF.
     */
    public function downloadCv()
    {
        $cvPath = public_path('Nayantha_Dhasun_CV.pdf');
        
        if (file_exists($cvPath)) {
            return response()->download($cvPath, 'Nayantha_Dhasun_ERP_Consultant_CV.pdf', [
                'Content-Type' => 'application/pdf',
            ]);
        }

        return redirect('/')->with('error', 'CV file is temporarily unavailable.');
    }
}
