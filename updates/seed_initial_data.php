<?php namespace Pensoft\Toolset\Updates;

use Seeder;
use Pensoft\Toolset\Models\Stage;
use Pensoft\Toolset\Models\Tool;

class SeedInitialData extends Seeder
{
    public function run()
    {
        // Create Researcher Stages
        $justStarting = Stage::create([
            'name' => 'just-starting',
            'title' => 'Just Starting',
            'role' => 'researcher',
            'sort_order' => 1
        ]);

        $midway = Stage::create([
            'name' => 'midway',
            'title' => 'Midway',
            'role' => 'researcher',
            'sort_order' => 2
        ]);

        $finalizing = Stage::create([
            'name' => 'finalizing',
            'title' => 'Finalizing',
            'role' => 'researcher',
            'sort_order' => 3
        ]);

        // Create Practitioner Stages
        $local = Stage::create([
            'name' => 'local',
            'title' => 'Local (Enablers)',
            'role' => 'practitioner',
            'sort_order' => 1
        ]);

        $national = Stage::create([
            'name' => 'national',
            'title' => 'National (Constraints)',
            'role' => 'practitioner',
            'sort_order' => 2
        ]);

        // =====================
        // RESEARCHER TOOLS
        // =====================

        // Just Starting Stage
        Tool::create([
            'stage_id' => $justStarting->id,
            'slug' => 'assessing-positionality',
            'title' => 'Positionality Assessment Framework',
            'description' => 'A comprehensive tool to help researchers understand and articulate their positionality in relation to their research subjects and context.',
            'features' => [
                ['feature' => 'Self-reflection questionnaire'],
                ['feature' => 'Bias identification checklist'],
                ['feature' => 'Documentation templates']
            ],
            'type' => 'researcher',
            'role' => 'researcher',
            'sort_order' => 1
        ]);

        Tool::create([
            'stage_id' => $justStarting->id,
            'slug' => 'defining-research-approach',
            'title' => 'Research Approach Navigator',
            'description' => 'Interactive guide for selecting and defining appropriate research methodologies based on your project goals.',
            'features' => [
                ['feature' => 'Methodology comparison matrix'],
                ['feature' => 'Decision tree guide'],
                ['feature' => 'Best practices library']
            ],
            'type' => 'researcher',
            'role' => 'researcher',
            'sort_order' => 2
        ]);

        Tool::create([
            'stage_id' => $justStarting->id,
            'slug' => 'communication-jargon',
            'title' => 'Plain Language Translator',
            'description' => 'Tools and guidelines for translating academic jargon into accessible language for diverse audiences.',
            'features' => [
                ['feature' => 'Jargon glossary'],
                ['feature' => 'Plain language templates'],
                ['feature' => 'Audience analysis tool']
            ],
            'type' => 'researcher',
            'role' => 'researcher',
            'sort_order' => 3
        ]);

        // Midway Stage
        Tool::create([
            'stage_id' => $midway->id,
            'slug' => 'involvement-with-community',
            'title' => 'Community Engagement Toolkit',
            'description' => 'Strategies and tools for meaningful community involvement throughout your research process.',
            'features' => [
                ['feature' => 'Engagement planning templates'],
                ['feature' => 'Feedback collection tools'],
                ['feature' => 'Community mapping guide']
            ],
            'type' => 'researcher',
            'role' => 'researcher',
            'sort_order' => 1
        ]);

        Tool::create([
            'stage_id' => $midway->id,
            'slug' => 'ensuring-participation',
            'title' => 'Participatory Methods Guide',
            'description' => 'Comprehensive guide to ensuring inclusive and equitable participation in research activities.',
            'features' => [
                ['feature' => 'Participation frameworks'],
                ['feature' => 'Accessibility checklist'],
                ['feature' => 'Inclusive facilitation tips']
            ],
            'type' => 'researcher',
            'role' => 'researcher',
            'sort_order' => 2
        ]);

        Tool::create([
            'stage_id' => $midway->id,
            'slug' => 'stakeholder-identification-fatigue',
            'title' => 'Stakeholder Management System',
            'description' => 'Tools for identifying, prioritizing, and managing stakeholder relationships while preventing fatigue.',
            'features' => [
                ['feature' => 'Stakeholder mapping tool'],
                ['feature' => 'Engagement tracking'],
                ['feature' => 'Fatigue prevention strategies']
            ],
            'type' => 'researcher',
            'role' => 'researcher',
            'sort_order' => 3
        ]);

        Tool::create([
            'stage_id' => $midway->id,
            'slug' => 'building-trust-collaboration',
            'title' => 'Trust Building Framework',
            'description' => 'Evidence-based approaches for establishing and maintaining trust in collaborative research.',
            'features' => [
                ['feature' => 'Trust assessment tool'],
                ['feature' => 'Collaboration agreements'],
                ['feature' => 'Conflict resolution guide']
            ],
            'type' => 'researcher',
            'role' => 'researcher',
            'sort_order' => 4
        ]);

        // Finalizing Stage
        Tool::create([
            'stage_id' => $finalizing->id,
            'slug' => 'community-centered-reporting',
            'title' => 'Community Reporting Templates',
            'description' => 'Templates and guidelines for creating research outputs that center community perspectives and needs.',
            'features' => [
                ['feature' => 'Report templates'],
                ['feature' => 'Visual communication tools'],
                ['feature' => 'Feedback integration guide']
            ],
            'type' => 'researcher',
            'role' => 'researcher',
            'sort_order' => 1
        ]);

        Tool::create([
            'stage_id' => $finalizing->id,
            'slug' => 'achieving-shared-understanding',
            'title' => 'Knowledge Co-Creation Toolkit',
            'description' => 'Methods for achieving shared understanding and co-creating knowledge with research partners.',
            'features' => [
                ['feature' => 'Co-creation workshops'],
                ['feature' => 'Validation processes'],
                ['feature' => 'Shared language development']
            ],
            'type' => 'researcher',
            'role' => 'researcher',
            'sort_order' => 2
        ]);

        Tool::create([
            'stage_id' => $finalizing->id,
            'slug' => 'ensuring-transformative-impact',
            'title' => 'Impact Assessment Framework',
            'description' => 'Tools for measuring, documenting, and maximizing the transformative impact of your research.',
            'features' => [
                ['feature' => 'Impact indicators'],
                ['feature' => 'Change theory templates'],
                ['feature' => 'Sustainability planning']
            ],
            'type' => 'researcher',
            'role' => 'researcher',
            'sort_order' => 3
        ]);

        // =====================
        // PRACTITIONER TOOLS - LOCAL (Enablers)
        // =====================

        Tool::create([
            'stage_id' => $local->id,
            'slug' => 'human-nature-connection',
            'title' => 'Human-Nature Connection Toolkit',
            'description' => 'Tools for fostering reciprocal human-nature relationships in local communities.',
            'features' => [
                ['feature' => 'Community engagement guides'],
                ['feature' => 'Nature-based solutions framework'],
                ['feature' => 'Impact assessment tools']
            ],
            'type' => 'enabler',
            'role' => 'practitioner',
            'intro_question' => 'What does it cost you to be a steward of nature?',
            'intro_content' => '<p>When answering the question, did you consider financial, social, or personal costs? Often, when we think about "cost," we default to an economic perspective. However, this is just one dimension. Costs can also be social, emotional, or environmental. Moreover, the way a society defines stewardship significantly influences how these costs are calculated and prioritized.</p>',
            'end_goal' => 'Prioritize stewardship over conservation by acknowledging local communities\' connection to their land and compensating ecosystem care services.',
            'inspiration_title' => 'Nashulai Natural Conservancy',
            'inspiration_content' => '<p>Nashulai is a community-owned conservancy located on the edge of the Maasai Mara National Park, where financial benefits are directly allocated to local stewards. This model shows how stewardship can be both socially empowering and ecologically effective, offering a powerful alternative to traditional conservation approaches.</p>',
            'video_url' => 'https://www.youtube.com/embed/dRynd3D2dOc?si=GdI-golzgC3efEo4',
            'transform_with' => [
                ['name' => 'Local steward leaders'],
                ['name' => 'Economic experts']
            ],
            'power_dynamics_content' => '<p>Feeling the connection we humans have with nature in a broader sense helps cultivate deeper affection and curiosity toward it. This curiosity encourages us to understand nature not just through a scientific lens, but through a systemic perspective, starting with our own inner development.</p>',
            'references_content' => '<p>Brander, L. M., de Groot, R., Schägner, J. P., Guisado-Goñi, V., van \'t Hoff, V., Solomonides, S., McVittie, A., Eppink, F., Sposato, M., Do, L., Ghermandi, A., Sinclair, M., & Thomas, R. (2024). Economic values for ecosystem services: A global synthesis and way forward. Ecosystem Services, 64, 101606.</p>',
            'sort_order' => 1
        ]);

        Tool::create([
            'stage_id' => $local->id,
            'slug' => 'front-runners-enthusiasm',
            'title' => 'Front Runners Engagement Kit',
            'description' => 'Harness the enthusiasm and determination of change pioneers.',
            'features' => [
                ['feature' => 'Leadership identification tools'],
                ['feature' => 'Motivation frameworks'],
                ['feature' => 'Network building guides']
            ],
            'type' => 'enabler',
            'role' => 'practitioner',
            'sort_order' => 2
        ]);

        Tool::create([
            'stage_id' => $local->id,
            'slug' => 'public-support',
            'title' => 'Public Support Building Toolkit',
            'description' => 'Strategies for building and maintaining public support for transformation.',
            'features' => [
                ['feature' => 'Communication templates'],
                ['feature' => 'Stakeholder mapping'],
                ['feature' => 'Campaign planning tools']
            ],
            'type' => 'enabler',
            'role' => 'practitioner',
            'sort_order' => 3
        ]);

        Tool::create([
            'stage_id' => $local->id,
            'slug' => 'increase-funding',
            'title' => 'Funding Acquisition Guide',
            'description' => 'Resources for increasing funding for transformative initiatives.',
            'features' => [
                ['feature' => 'Grant writing templates'],
                ['feature' => 'Funding source database'],
                ['feature' => 'Proposal frameworks']
            ],
            'type' => 'enabler',
            'role' => 'practitioner',
            'sort_order' => 4
        ]);

        Tool::create([
            'stage_id' => $local->id,
            'slug' => 'value-driven-finance',
            'title' => 'Value-Driven Finance Framework',
            'description' => 'Align financial systems with sustainability values.',
            'features' => [
                ['feature' => 'Impact investment guides'],
                ['feature' => 'ESG integration tools'],
                ['feature' => 'Value assessment frameworks']
            ],
            'type' => 'enabler',
            'role' => 'practitioner',
            'sort_order' => 5
        ]);

        Tool::create([
            'stage_id' => $local->id,
            'slug' => 'diversity-of-voices',
            'title' => 'Inclusive Voices Toolkit',
            'description' => 'Recognize and incorporate diverse perspectives in decision-making.',
            'features' => [
                ['feature' => 'Stakeholder inclusion guides'],
                ['feature' => 'Facilitation tools'],
                ['feature' => 'Representation frameworks']
            ],
            'type' => 'enabler',
            'role' => 'practitioner',
            'sort_order' => 6
        ]);

        Tool::create([
            'stage_id' => $local->id,
            'slug' => 'transformative-governance',
            'title' => 'Transformative Governance Guide',
            'description' => 'Implement adaptive and responsive governance frameworks.',
            'features' => [
                ['feature' => 'Governance assessment tools'],
                ['feature' => 'Policy integration guides'],
                ['feature' => 'Monitoring frameworks']
            ],
            'type' => 'enabler',
            'role' => 'practitioner',
            'sort_order' => 7
        ]);

        // =====================
        // PRACTITIONER TOOLS - NATIONAL (Constraints)
        // =====================

        Tool::create([
            'stage_id' => $national->id,
            'slug' => 'weak-human-nature-connection',
            'title' => 'Reconnecting Human-Nature Toolkit',
            'description' => 'Strategies to address and overcome disconnection between people and nature at national scale.',
            'features' => [
                ['feature' => 'National awareness campaigns'],
                ['feature' => 'Education program frameworks'],
                ['feature' => 'Policy recommendations']
            ],
            'type' => 'constraint',
            'role' => 'practitioner',
            'sort_order' => 1
        ]);

        Tool::create([
            'stage_id' => $national->id,
            'slug' => 'actors-conformity',
            'title' => 'Breaking Conformity Guide',
            'description' => 'Tools to overcome resistance to change and status quo bias in institutions.',
            'features' => [
                ['feature' => 'Change management frameworks'],
                ['feature' => 'Stakeholder engagement strategies'],
                ['feature' => 'Innovation incentive models']
            ],
            'type' => 'constraint',
            'role' => 'practitioner',
            'sort_order' => 2
        ]);

        Tool::create([
            'stage_id' => $national->id,
            'slug' => 'declined-public-support',
            'title' => 'Public Trust Rebuilding Kit',
            'description' => 'Strategies for rebuilding trust and engagement with the public.',
            'features' => [
                ['feature' => 'Trust assessment tools'],
                ['feature' => 'Communication strategies'],
                ['feature' => 'Transparency frameworks']
            ],
            'type' => 'constraint',
            'role' => 'practitioner',
            'sort_order' => 3
        ]);

        Tool::create([
            'stage_id' => $national->id,
            'slug' => 'lack-of-tools',
            'title' => 'Compliance Tools Development Guide',
            'description' => 'Framework for developing practical tools for policy implementation.',
            'features' => [
                ['feature' => 'Tool development templates'],
                ['feature' => 'Implementation guides'],
                ['feature' => 'Monitoring systems']
            ],
            'type' => 'constraint',
            'role' => 'practitioner',
            'sort_order' => 4
        ]);

        Tool::create([
            'stage_id' => $national->id,
            'slug' => 'short-term-thinking',
            'title' => 'Long-Term Vision Framework',
            'description' => 'Shift focus from immediate gains to long-term sustainability.',
            'features' => [
                ['feature' => 'Future scenario planning'],
                ['feature' => 'Intergenerational equity tools'],
                ['feature' => 'Long-term impact assessment']
            ],
            'type' => 'constraint',
            'role' => 'practitioner',
            'sort_order' => 5
        ]);

        Tool::create([
            'stage_id' => $national->id,
            'slug' => 'power-imbalance',
            'title' => 'Power Balance Toolkit',
            'description' => 'Address unequal distribution of power in decision-making processes.',
            'features' => [
                ['feature' => 'Power mapping tools'],
                ['feature' => 'Inclusive governance models'],
                ['feature' => 'Equity assessment frameworks']
            ],
            'type' => 'constraint',
            'role' => 'practitioner',
            'sort_order' => 6
        ]);

        Tool::create([
            'stage_id' => $national->id,
            'slug' => 'bureaucracy',
            'title' => 'Bureaucracy Reduction Guide',
            'description' => 'Streamline processes and reduce administrative barriers.',
            'features' => [
                ['feature' => 'Process simplification tools'],
                ['feature' => 'Digital transformation guides'],
                ['feature' => 'Efficiency assessment frameworks']
            ],
            'type' => 'constraint',
            'role' => 'practitioner',
            'sort_order' => 7
        ]);
    }
}
