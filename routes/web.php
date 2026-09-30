<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuoteController;

Route::view('/', 'home.index')->name('home');
Route::view('/about', 'about.index')->name('about');

Route::view('/services', 'services.index')->name('services');
Route::get('/services/{slug}', function (string $slug) {
    $services = [
        'web-development' => [
            'title' => 'Web Development', 'eyebrow' => 'SERVICES / WEB',
            'description' => 'We design and develop websites and web applications that help people use your service and help your team do its work.',
            'what' => [['Business websites', 'Clear, responsive websites that explain your offer and guide visitors to take action.', 'grid'], ['Web applications', 'Interactive tools and customer portals shaped around your product.', 'code'], ['E-commerce', 'Online storefronts, product catalogues and checkout flows.', 'cart'], ['SaaS platforms', 'Subscription products, dashboards and account experiences.', 'layers']],
            'serviceOptions' => [['Frontend development', 'Responsive pages and interactive product interfaces.'], ['Backend & APIs', 'Application logic, data handling and integrations.'], ['E-commerce development', 'Storefront and checkout experiences for your business.'], ['Ongoing improvements', 'Maintenance, refinements and new features as needs change.']],
            'languages' => ['PHP', 'JavaScript', 'TypeScript'],
            'technologies' => ['Frontend frameworks', 'Backend & APIs', 'Database & storage', 'Hosting & deployment'],
            'features' => [['Responsive layouts', 'Designed to work across mobile, tablet and desktop.'], ['Accessible structure', 'Semantic content and keyboard-friendly interaction.'], ['Search-ready foundations', 'Page structure and metadata prepared for search.'], ['Connected systems', 'Integrations that fit your current tools and workflow.']],
            'industries' => ['Startups', 'Professional services', 'Education', 'E-commerce'], 'projects' => ['growpec', 'snapstar'],
        ],
        'mobile-app-development' => [
            'title' => 'Mobile App Development', 'eyebrow' => 'SERVICES / MOBILE',
            'description' => 'We create mobile experiences that make it easier for your customers and your team to get things done on the go.',
            'what' => [['Customer apps', 'Mobile products that help customers discover, use and return to your service.', 'phone'], ['Internal apps', 'Focused tools for teams working in the field or away from a desk.', 'briefcase'], ['Cross-platform apps', 'One considered product experience across supported mobile platforms.', 'layers'], ['App improvements', 'New features, refinements and support for an existing application.', 'spark']],
            'serviceOptions' => [['Product planning', 'Clarify the audience, core tasks and first-release scope.'], ['Mobile interface design', 'Map key journeys and shape the screens people use.'], ['App development', 'Build the application and connect required services.'], ['Release & maintenance', 'Prepare releases and plan ongoing improvements.']],
            'languages' => ['Dart', 'Kotlin', 'Java', 'JavaScript', 'TypeScript'],
            'technologies' => ['iOS & Android platforms', 'Cross-platform development', 'API & backend connection', 'App release workflow'],
            'features' => [['Clear onboarding', 'Help new users understand the app and get started.'], ['Useful notifications', 'Plan relevant, timely communication with users.'], ['Connected data', 'Keep app experiences connected with product services.'], ['Device-friendly UI', 'Design touch-first screens for common device sizes.']],
            'industries' => ['Consumer products', 'Education', 'Field services', 'Business tools'], 'projects' => ['snapstar', 'growpec'],
        ],
        'custom-software' => [
            'title' => 'Custom Software', 'eyebrow' => 'SERVICES / SOFTWARE',
            'description' => 'We build software around the way your organization works, connecting information and reducing repetitive tasks.',
            'what' => [['Business systems', 'Bring important operational workflows into one useful application.', 'briefcase'], ['CRM & ERP tools', 'Organize customer, sales, inventory or resource workflows.', 'grid'], ['Internal dashboards', 'Give teams a clear view of work, status and useful information.', 'layers'], ['Workflow automation', 'Connect steps and reduce manual handoffs where it makes sense.', 'route']],
            'serviceOptions' => [['Requirements discovery', 'Map the current process and identify what needs to improve.'], ['System design', 'Plan the application structure, user roles and information flow.'], ['Software development', 'Build the interface, logic, data and integrations.'], ['Rollout & support', 'Prepare the system for use and plan future changes.']],
            'languages' => ['PHP', 'JavaScript', 'TypeScript', 'SQL'],
            'technologies' => ['Web & application layer', 'Business logic & APIs', 'Database design', 'Identity & access control'],
            'features' => [['Role-based access', 'Give users access to the tools and information they need.'], ['Workflow fit', 'Shape the system around real tasks and team handoffs.'], ['Useful reporting', 'Surface operational data in a clear, practical format.'], ['Maintainable foundation', 'Keep the software ready for future changes.']],
            'industries' => ['Small businesses', 'Operations teams', 'Education', 'Service organizations'], 'projects' => ['growpec'],
        ],
        'ui-ux-design' => [
            'title' => 'UI/UX Design', 'eyebrow' => 'SERVICES / DESIGN',
            'description' => 'We make digital products easier to understand and use through thoughtful research, interaction design and visual systems.',
            'what' => [['Product design', 'Shape the structure and experience of a digital product.', 'spark'], ['Web & app design', 'Design responsive interfaces for websites and mobile products.', 'pen'], ['Prototypes', 'Explore user flows and interactions before development.', 'layers'], ['Design systems', 'Create reusable interface patterns and visual guidance.', 'grid']],
            'serviceOptions' => [['Discovery & research', 'Understand user needs, business goals and product constraints.'], ['User flows & wireframes', 'Organize key tasks and screen structure.'], ['Visual interface design', 'Create polished, consistent screens for the product.'], ['Prototype & handoff', 'Share interactions and specifications with the build team.']],
            'languages' => ['HTML', 'CSS', 'JavaScript'],
            'technologies' => ['User research methods', 'Wireframing & prototyping', 'Interface design systems', 'Usability review'],
            'features' => [['User-centered flows', 'Help people complete tasks with fewer obstacles.'], ['Consistent components', 'Make common patterns easier to recognize and reuse.'], ['Responsive design', 'Consider how layouts adapt to different screens.'], ['Developer handoff', 'Keep design intent clear during implementation.']],
            'industries' => ['SaaS products', 'Education', 'Consumer apps', 'Business platforms'], 'projects' => ['snapstar', 'growpec'],
        ],
        'cloud-backend' => [
            'title' => 'Cloud & Backend', 'eyebrow' => 'SERVICES / CLOUD',
            'description' => 'We build the services behind your product: APIs, data systems and deployment foundations that connect the experience.',
            'what' => [['REST APIs', 'Connect web, mobile and third-party services through clear interfaces.', 'code'], ['Database architecture', 'Organize product data around the needs of the application.', 'layers'], ['Authentication', 'Plan sign-in, roles and access for your product users.', 'shield'], ['Cloud deployment', 'Prepare application services and environments for release.', 'cloud']],
            'serviceOptions' => [['Backend development', 'Build application logic and data workflows.'], ['API integrations', 'Connect product features with external services.'], ['Cloud setup', 'Configure deployment, storage and runtime environments.'], ['Monitoring & support', 'Plan visibility and maintenance for running services.']],
            'languages' => ['PHP', 'JavaScript', 'TypeScript', 'SQL'],
            'technologies' => ['API architecture', 'Relational & document databases', 'Cloud hosting', 'Storage & delivery'],
            'features' => [['Secure foundations', 'Apply careful access controls and safe configuration.'], ['Reliable data flows', 'Plan how information moves across product systems.'], ['Scale-aware architecture', 'Leave room for future product and traffic needs.'], ['Deployment readiness', 'Prepare repeatable release and environment workflows.']],
            'industries' => ['SaaS products', 'E-commerce', 'Education', 'Internal platforms'], 'projects' => ['growpec', 'snapstar'],
        ],
        'digital-solutions' => [
            'title' => 'Digital Solutions', 'eyebrow' => 'SERVICES / DIGITAL',
            'description' => 'We help identify practical ways to connect tools, simplify processes and make technology work better for your business.',
            'what' => [['Business automation', 'Reduce repetitive steps in a workflow with appropriate digital tools.', 'spark'], ['System integrations', 'Connect applications and move information between them.', 'route'], ['Digital transformation', 'Plan improvements to existing services and ways of working.', 'grid'], ['Custom solutions', 'Explore a tailored approach to a specific business challenge.', 'puzzle']],
            'serviceOptions' => [['Understand the challenge', 'Map the current process, tools and desired outcome.'], ['Explore options', 'Compare practical approaches and implementation scope.'], ['Build & connect', 'Configure integrations or create the needed software.'], ['Measure & improve', 'Review how the solution works and identify next steps.']],
            'languages' => ['PHP', 'JavaScript', 'TypeScript', 'SQL'],
            'technologies' => ['Workflow & automation tools', 'APIs & integrations', 'Data exchange', 'Cloud services'],
            'features' => [['Process mapping', 'Make current steps and handoffs easier to see.'], ['Practical automation', 'Automate repeatable work where it adds value.'], ['Connected tools', 'Reduce isolated data and duplicate effort.'], ['Room to evolve', 'Keep the solution adaptable as requirements change.']],
            'industries' => ['Startups', 'Small businesses', 'Education', 'Service organizations'], 'projects' => ['growpec', 'snapstar'],
        ],
    ];

    abort_unless(isset($services[$slug]), 404);

    return view('services.detail', ['service' => $services[$slug]]);
})->name('services.show');

Route::view('/solutions', 'solutions.index')->name('solutions');
Route::get('/solutions/{slug}', function (string $slug) {
    $solutions = [
        'startup-solutions' => ['title' => 'Startup Solutions', 'eyebrow' => 'SOLUTIONS / STARTUPS', 'description' => 'Move from an early idea to a focused first release, with a product plan and technical foundation designed to evolve.', 'items' => ['Product discovery', 'MVP planning', 'UX and prototyping', 'Web and mobile apps', 'Launch support', 'Ongoing iteration']],
        'business-solutions' => ['title' => 'Business Solutions', 'eyebrow' => 'SOLUTIONS / BUSINESS', 'description' => 'Make everyday work clearer with tools that connect information, teams and business processes.', 'items' => ['Business platforms', 'Internal dashboards', 'Workflow automation', 'CRM and ERP', 'Data integrations', 'Cloud systems']],
        'education-solutions' => ['title' => 'Education Solutions', 'eyebrow' => 'SOLUTIONS / EDUCATION', 'description' => 'Design accessible digital learning experiences for students, educators and education providers.', 'items' => ['Learning platforms', 'Course experiences', 'Student portals', 'Progress dashboards', 'Mobile learning', 'Education integrations']],
        'ecommerce-solutions' => ['title' => 'E-commerce Solutions', 'eyebrow' => 'SOLUTIONS / E-COMMERCE', 'description' => 'Create a smooth shopping experience and reliable systems to support your online business.', 'items' => ['Online storefronts', 'Product catalogues', 'Checkout flows', 'Order management', 'Payment integrations', 'Customer tools']],
        'custom-solutions' => ['title' => 'Custom Solutions', 'eyebrow' => 'SOLUTIONS / CUSTOM', 'description' => 'Start with the challenge you need to solve and shape a solution around your people and process.', 'items' => ['Technical discovery', 'System integrations', 'Custom applications', 'Operational tools', 'Cloud architecture', 'Product support']],
    ];

    abort_unless(isset($solutions[$slug]), 404);

    return view('pages.detail', ['page' => $solutions[$slug], 'back' => route('solutions')]);
})->name('solutions.show');

Route::view('/projects', 'projects.index')->name('projects');
Route::get('/projects/{slug}', function (string $slug) {
    $projects = [
        'snapstar' => [
            'title' => 'SnapStar', 'eyebrow' => 'PROJECT / SOCIAL PLATFORM', 'type' => 'Mobile social platform concept',
            'description' => 'A social platform concept focused on sharing the moments people want to remember. The product direction brings mobile-first interaction together with a connected backend.',
            'overview' => 'SnapStar explores a friendly mobile space for sharing photos, discovering updates and keeping up with a community.',
            'challenge' => 'Create a social experience that feels easy to use while supporting profiles, media sharing and a dependable content flow.',
            'solution' => 'A mobile-first product direction with clear user journeys, familiar social patterns and a backend planned around connected product data.',
            'features' => ['Profiles and personal feeds', 'Photo sharing concept', 'Community discovery', 'Mobile-first navigation'],
            'stack' => ['Flutter', 'Dart', 'Supabase', 'Firebase', 'PostgreSQL'],
            'design' => 'The interface direction prioritizes quick sharing, clear content hierarchy and touch-friendly screens. The concept uses a bright visual style to keep the experience approachable.',
            'process' => ['Product goals and audience', 'Core user journeys', 'Interface direction', 'Technical architecture concept'],
            'impact' => 'This is a product concept. Production usage, user outcomes and business impact have not been measured.',
            'challenges' => [['Media handling', 'The concept accounts for the needs of image uploads and delivery across mobile connections.'], ['Connected services', 'The proposed stack separates app experience, product data and supporting services.']],
            'information' => [['Project type', 'Mobile social platform concept'], ['Platform', 'iOS and Android concept'], ['Status', 'Concept'], ['Services', 'Product direction, UI/UX and application architecture']],
            'related' => ['growpec'],
        ],
        'growpec' => [
            'title' => 'GrowPec', 'eyebrow' => 'PROJECT / EDUCATION PLATFORM', 'type' => 'Web education platform concept',
            'description' => 'An education platform concept designed to make learning and personal growth more accessible through a clear web experience.',
            'overview' => 'GrowPec explores a structured online learning experience where learners can find educational content and follow their progress.',
            'challenge' => 'Organize learning content and progress in a way that feels approachable to learners and straightforward to navigate.',
            'solution' => 'A responsive web product direction with a clear content structure, learning-focused pages and a maintainable application foundation.',
            'features' => ['Course and content structure', 'Learner dashboard concept', 'Progress-focused experience', 'Responsive web interface'],
            'stack' => ['Laravel', 'PHP', 'JavaScript', 'PostgreSQL'],
            'design' => 'The design direction keeps learning content easy to scan, gives progress a clear place in the experience and adapts the layout for different screen sizes.',
            'process' => ['Learning goals and audience', 'Information structure', 'Key learning journeys', 'Application architecture concept'],
            'impact' => 'This is a product concept. Learner outcomes, adoption and business impact have not been measured.',
            'challenges' => [['Organizing content', 'A clear hierarchy helps learners understand where to begin and what content is available.'], ['Supporting different screens', 'The responsive layout concept keeps the learning experience usable on desktop and mobile.']],
            'information' => [['Project type', 'Education platform concept'], ['Platform', 'Responsive web'], ['Status', 'Concept'], ['Services', 'Product direction, UI/UX and web application architecture']],
            'related' => ['snapstar'],
        ],
    ];

    abort_unless(isset($projects[$slug]), 404);

    return view('projects.detail', ['project' => $projects[$slug], 'slug' => $slug, 'back' => route('projects')]);
})->name('projects.show');

Route::view('/technologies', 'technologies.index')->name('technologies');
Route::view('/process', 'process.index')->name('process');

Route::view('/case-studies', 'case-studies.index')->name('case-studies');
Route::get('/case-studies/{slug}', function (string $slug) {
    $studies = [
        'snapstar' => ['title' => 'SnapStar: a social product concept', 'eyebrow' => 'CASE STUDY / SOCIAL', 'description' => 'Explore the product direction, interface decisions and technology plan behind the SnapStar social platform concept.', 'items' => ['The product opportunity', 'Audience and product goals', 'Experience direction', 'Mobile interface', 'Technology choices', 'What could come next']],
        'growpec' => ['title' => 'GrowPec: a learning platform concept', 'eyebrow' => 'CASE STUDY / EDUCATION', 'description' => 'Explore the learning experience, web product direction and technical approach behind the GrowPec education platform concept.', 'items' => ['The learning challenge', 'Product goals', 'Information structure', 'Learning experience', 'Technology choices', 'What could come next']],
    ];

    abort_unless(isset($studies[$slug]), 404);

    return view('pages.detail', ['page' => $studies[$slug], 'back' => route('case-studies')]);
})->name('case-studies.show');

Route::view('/blog', 'blog.index')->name('blog');
Route::get('/blog/{slug}', function (string $slug) {
    $posts = [
        'planning-an-mvp' => [
            'title' => 'A practical way to plan your first MVP', 'category' => 'Product Development', 'image' => 'blog-mvp.svg', 'reading_time' => '6 min read', 'date' => 'September 30, 2026',
            'description' => 'A focused first release starts with a clear user need and something useful to learn. Use this practical approach to decide what belongs in your MVP.',
            'tags' => ['MVP', 'Product Strategy', 'Startups', 'Software Development'], 'related' => ['designing-for-clarity', 'choosing-a-technology-stack'],
            'sections' => [
                ['title' => 'Start with the problem', 'paragraphs' => ['An MVP is a way to test whether a focused product experience can address a real user need. It is not simply a smaller version of every feature you hope to build later.', 'Describe who has the problem, when it occurs and what they do today. If the problem is still vague, spend time learning about it before choosing features.']],
                ['title' => 'Decide what you need to learn', 'paragraphs' => ['A useful first release answers a small number of important questions. Write down the assumptions that could change your product direction, then decide what evidence would help you evaluate them.'], 'points' => ['Will the intended audience recognize this problem?', 'Can the core task be completed with the proposed experience?', 'What would make someone return or recommend it?']],
                ['title' => 'Choose the smallest useful scope', 'paragraphs' => ['Map the main user journey from the first step to one meaningful outcome. Keep the features needed for that journey and defer items that do not help deliver it or learn from it.', 'A narrow scope can still feel complete. Clear onboarding, helpful empty states and basic feedback often matter more than a long list of secondary features.']],
                ['title' => 'Learn, then make the next decision', 'paragraphs' => ['Plan how you will collect feedback before launch. Decide which behaviors, support questions or user conversations will help the team understand what is working.', 'After release, compare what you learned with the assumptions you started with. Improve the experience, adjust the audience or rethink the product direction based on evidence.']],
            ],
        ],
        'designing-for-clarity' => [
            'title' => 'Designing digital products for clarity', 'category' => 'UI/UX Design', 'image' => 'blog-design.svg', 'reading_time' => '5 min read', 'date' => 'September 30, 2026',
            'description' => 'Clear product design helps people understand what they can do and what will happen next. Consistent patterns and useful feedback make an experience easier to navigate.',
            'tags' => ['UI/UX', 'Product Design', 'Accessibility', 'Digital Products'], 'related' => ['planning-an-mvp', 'choosing-a-technology-stack'],
            'sections' => [
                ['title' => 'Organize around user goals', 'paragraphs' => ['People arrive at a product with a task in mind. Organize screens, navigation and content around those tasks so users can see where to begin and how to move forward.', 'Use familiar labels and group related actions together. A clear information structure reduces the effort required to understand the interface.']],
                ['title' => 'Make the next action visible', 'paragraphs' => ['Each screen should make its primary action easy to recognize. Visual hierarchy, concise labels and consistent button styles help distinguish the main path from secondary choices.'], 'points' => ['Use plain language for labels and instructions.', 'Keep related actions close to their context.', 'Show what will happen after an action.']],
                ['title' => 'Give useful feedback', 'paragraphs' => ['Products should acknowledge actions and explain their current state. Confirmation, progress indicators and clear error messages help people recover when something does not go as expected.', 'Empty states are part of the experience too. Explain why there is no content yet and offer a useful next step.']],
                ['title' => 'Check the experience with people', 'paragraphs' => ['Review designs at mobile and desktop sizes, and test common tasks with representative users when possible. Watch for hesitation, repeated attempts and unclear language.', 'Small revisions based on observed needs can make a product easier to use without adding more features.']],
            ],
        ],
        'choosing-a-technology-stack' => [
            'title' => 'Choosing a technology stack for your product', 'category' => 'Engineering', 'image' => 'blog-stack.svg', 'reading_time' => '7 min read', 'date' => 'September 30, 2026',
            'description' => 'The right stack depends on product needs, team skills and how the system is expected to grow. Start with constraints and choose tools your team can support.',
            'tags' => ['Technology', 'Architecture', 'Web Development', 'Engineering'], 'related' => ['planning-an-mvp', 'designing-for-clarity'],
            'sections' => [
                ['title' => 'Start with product requirements', 'paragraphs' => ['List what the product needs to do, which systems it must connect to and what constraints matter. The stack should support the product and the team operating it.', 'Consider performance, security, accessibility, data needs and deployment environments as part of the decision, rather than choosing tools by popularity alone.']],
                ['title' => 'Consider the people maintaining it', 'paragraphs' => ['A technology is useful when the team can build with it and maintain it over time. Existing experience, hiring needs, documentation and the available support community all affect long-term cost.'], 'points' => ['What can the current team confidently support?', 'Will the product need specialist infrastructure?', 'How easy is it to update and monitor?']],
                ['title' => 'Plan for integrations and operations', 'paragraphs' => ['Map required services such as payments, identity, messaging and analytics. Confirm that the proposed stack can connect to them safely and that the deployment approach fits the product.', 'Also consider backups, observability, upgrades and how changes will reach production. These operational needs shape the architecture as much as the first release does.']],
                ['title' => 'Make trade-offs explicit', 'paragraphs' => ['There is rarely one perfect stack. Document why the team chose its tools, what trade-offs were accepted and which future needs could lead to a change.', 'A clear, supportable foundation is usually more valuable than adding complexity for a scale the product has not reached. Revisit decisions as real requirements emerge.']],
            ],
        ],
    ];

    abort_unless(isset($posts[$slug]), 404);

    return view('blog.detail', ['page' => $posts[$slug], 'slug' => $slug]);
})->name('blog.show');

Route::view('/contact', 'contact.index', ['contactInfo' => config('contact')])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::view('/request-a-quote', 'quote.index')->name('quote');
Route::post('/request-a-quote', [QuoteController::class, 'store'])->name('quote.store');

Route::view('/legal', 'legal.index')->name('legal');
Route::view('/privacy-policy', 'legal.privacy')->name('legal.privacy');
Route::view('/terms-and-conditions', 'legal.terms')->name('legal.terms');
Route::view('/cookie-policy', 'legal.cookies')->name('legal.cookies');
Route::view('/disclaimer', 'legal.disclaimer')->name('legal.disclaimer');
Route::redirect('/legal/privacy-policy', '/privacy-policy', 301);
Route::redirect('/legal/terms', '/terms-and-conditions', 301);
Route::redirect('/legal/cookies', '/cookie-policy', 301);
