let DEFAULT_LANG = sessionStorage.getItem('language') ? sessionStorage.getItem('language') : 'pt-br';
let ALERT_TRANSLATION_INCOMPLETE = document.querySelector('#translatoin-incomplete');
let ALERT_TRANSLATION_UNAVAILABLE = document.querySelector('#translatoin-unavailable');
let DATA_LANG_ELEMENTS = document.querySelectorAll('[data-lang-str]');
let TRANSLATIONS = {
  'en': {
    'menuhome'        :'Home',
    'menuservicos'    :'Our Services',
    'menuempresa'     :'About us',
    'menuprivacidade' :'Privacy Policy',
    'menucontato'     :'Contact',

    'home_ajuda'             :'We help you to make your trip an unforgettable moment!',
    'home_realizar'          :'Traveling with full services, without having to worry about tickets, hotel reservations, transfers and other bureaucratic issues? With <b>Embarque Ideal</b> this is possible.',
    'home_escolha'           :'The choice of your destiny',
    'home_descubra'          :'Discover your ideal destination with our personalized support. Turn dreams into unforgettable itineraries!',
    'home_compras'           :'Purchase your tickets',
    'home_garanta'           :'Guarantee hassle-free travel! Our agency takes care of the tickets for you to travel with tranquility and comfort.',
    'home_opcoes'            :'Thousands of options to travel',
    'home_milhares'          :'Choose from thousands of options of destinations and hotels the one of your choice. If you need help, ask for a quote!',
    'home_rolando'           :"What's going on <span>on Instagram?</span>",
    'home_siga'              :"Follow so you don't miss the news",
    'home_depoimentos'       :'Depositions',
    'home_depoimentos_texto' :'What our customers are saying',
    'home_servicos'          :'Amazing Services',

    'form_origem'      :'From*',
    'form_destino'     :'To*',
    'form_data_ida'    :'Departure date*',
    'form_data_volta'  :'Back date',
    'form_passageiros' :'Passengers*',
    'form_nome'        :'Name*',
    'form_tel'         :'Telephone*',
    'form_hora'        :'Contact time',
    'form_enviar'      :'Request Quote',
    
    'servicos_titulo'           :'Our Services',
    'servicos_subtitulo'        :'Air and Bus Tickets',
    'servicos_passaerea'        :'<b>Air Tickets:</b> quotations can be made both nationally and internationally but always with a lower value and the ticket is delivered 24 hours before your flight.',
    'servicos_passrod'          :'<b>Bus tickets:</b> quotes can be made for the national territory and for countries within South America.',
    'servicos_formaspagamento'  :'<b>Payment methods are:</b><br>- Via Pix(Brazilian payment method) with 5% discount<br>- Credit card up to 6 interest-free installments',
    'servicos_desconto'         :'Pix discount',
    'servicos_desconto_texto'   :'We accept payment on Pix and give you a 5% discount if you choose this payment method.',
    'servicos_parcele'          :'Installment on the card',
    'servicos_parcele_texto'    :'We split your purchase up to 6 installments without interest for credit card payment.',
    'servicos_entrega'          :'Digital delivery',
    'servicos_entrega_texto'    :'Tickets delivered completely digitally bringing ease and convenience.',
    'servicos_hospedagem'       :'Accommodation',
    'servicos_hospedagem_texto' :'We prioritize quality and recommend accommodations with excellent ratings and easy mobility within your destination.',
    'servicos_assessoria'       :'Assistance',
    'servicos_assessoria_texto' :'As living abroad is not an easy task, we assist and guide you through the documentation process until you arrive in your desired country.',
    'servicos_seguro'           :'Travel Insurance',
    'servicos_seguro_texto'     :'Unexpected events can occur, even outside your country. For international and national trips, we recommend insurance for added security.',
    'servicos_perguntas'        :'Frequently Asked Questions',
    'servicos_duvidas'          :'General questions',
    'servicos_pergunta1'        :'After purchasing my plane ticket, how soon is my ticket available?',
    'servicos_resp1'            :'It depends on the purchase method. For mileage, the locator is delivered with check-in within 48 hours before departure. For points, your ticket is completely delivered within 24 business hours.',
    'servicos_pergunta2'        :'When I purchase a bus ticket, is my ticket available immediately?',
    'servicos_resp2'            :'Yes! Upon purchasing your ticket, we immediately issue your pass.',
    'servicos_pergunta3'        :'What are the main contact channels?',
    'servicos_resp3'            :'Convenience is our hallmark. We are always available through WhatsApp, and you can also contact us on Instagram or Facebook (@embarqueideal).',
    'servicos_pergunta4'        :'Do Embarque Ideal have a physical store?',
    'servicos_resp4'            :'No, we exclusively operate online through the contact channels mentioned in question 3.',
    'servicos_pergunta5'        :'Do Embarque Ideal have the necessary licenses to operate?',
    'servicos_resp5'            :'Certainly! We have authorization from Cadastur, which is the document generated by the Ministry of Tourism of Brazil that ensures we have government authorization to operate as an agency.',
    'servicos_pergunta6'        :'What are your payment methods?',
    'servicos_resp6'            :'By PIX* with 5% discount, installment payments by PIX/boleto*, and credit card payments in up to 3 interest-free installments.<br>*Pix and boleto are Brazilian payment methods conducted through a banking service and paid in cash.',
    'servicos_pergunta7'        :'When I book a package, is any kind of proof issued?',
    'servicos_resp7'            :'Yes! As soon as you formalize your trip, we send you a contract with all agreed-upon information, and the signature is done digitally, so we are available to assist you from wherever you are.',

    'empresa_titulo'         :'About us',
    'empresa_subtitulo'      :'We are Embarque Ideal, a travel agency focused on exploring the world and providing unforgettable moments to all kinds of travelers, regardless of where they are.',
    'empresa_objetivo'       :'<i class="fa-solid fa-ranking-star"></i> Objective',
    'empresa_objetivo_texto' :'Our objective is to make the travel experience easier and more accessible for our clients, acting as intermediaries between them and the various services we can offer.',
    'empresa_missao'         :'<i class="fa-solid fa-rocket"></i> Mission',
    'empresa_missao_texto'   :'Our mission is to turn dreams into reality, connecting people to their destinations and providing an unforgettable experience.',
    'empresa_valores'        :'<i class="fa-solid fa-handshake-angle"></i> Values',
    'empresa_valores_texto1' :'<i class="fa-solid fa-heart"></i> <b>Passion for Travel:</b> We show enthusiasm and love for the world of travel, sharing this excitement with clients and colleagues.',
    'empresa_valores_texto2' :'<i class="fa-solid fa-glasses"></i> <b>Transparency:</b> We offer personalized service with full transparency and clarity about all travel-related information.',
    'empresa_valores_texto3' :'<i class="fa-solid fa-person-chalkboard"></i> <b>Adaptability:</b> We are constantly evolving to ensure our clients always have the best experience.',
    'empresa_valores_texto4' :'<i class="fa-solid fa-building-lock"></i> <b>Safety:</b> We ensure that trips are planned with our clients safety in mind, in all aspects.',
    'empresa_valores_texto5' :'<i class="fa-solid fa-people-group"></i> <b>Dedicated Team:</b> We create a collaborative and motivating work environment where employees are committed to providing amazing experiences to clients.',

    'privacidade_titulo'                 :'Privacy Policy',
    'privacidade_subtitulo'              :'Embarque Ideal agency is committed to protecting the privacy and security of personal information for its clients and visitors. This Privacy Policy outlines how we collect, use, share, and protect your personal information. By using our services, you agree to the terms of this policy.',
    'privacidade_coleta'                 :'Collection of Personal Information',
    'privacidade_coleta_texto'           :'We collect personal information such as full name, date of birth, personal identification numbers, complete home address, passport number, email address, phone number, payment information, and travel preferences when you book our services or interact with us through our website, app, or other channels.',
    'privacidade_uso'                    :'Use of Personal Information',
    'privacidade_uso_texto'              :'We use your personal information to process bookings, provide travel information, enhance our services, personalize travel experiences, and respond to your requests. We may also use your information for marketing purposes, provided you have consented.',
    'privacidade_compartilhamento'       :'Sharing of Information',
    'privacidade_compartilhamento_texto' :'We share personal information with travel partners, service providers, and third parties necessary to process your bookings and ensure delivery of contracted services. We do not sell, rent, or disclose your personal information to third parties for marketing purposes without your consent.',
    'privacidade_seguranca'              :'Data Security',
    'privacidade_seguranca_texto'        :'We implement security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, data transmission over the internet is not completely secure, and we cannot guarantee the security of information transmitted online.',
    'privacidade_cookies'                :'Cookies and Similar Technologies',
    'privacidade_cookies_texto'          :'We use cookies and similar technologies to enhance user experience, analyze trends, and manage the website. You can choose not to accept cookies, but this may affect site functionality.',
    'privacidade_direitos'               :'Your Rights',
    'privacidade_direitos_texto'         :'You have the right to access, correct, or delete your personal information. You can also opt out of marketing communications at any time. Contact us to exercise these rights.',
    'privacidade_termos'                 :'Terms of Service',
    'privacidade_reservas'               :'Bookings and Payments',
    'privacidade_reservas_texto'         :'When booking our services, you agree to provide accurate and complete information. Payments must be made according to the specific payment policies for each service. We reserve the right to cancel or refuse services due to incorrect information or unauthorized payments.',
    'privacidade_cancelamentos'          :'Cancellations and Refunds',
    'privacidade_cancelamentos_texto'    :"Cancellation and refund policies vary based on the reserved services. It's important to read and understand these policies before confirming a booking.<br />Cancellations made by the customer due to preferences for a specific airline, mileage, or changes in date and flight will be refunded within 60 days.<br />Once the trip has commenced, no refunds will be issued if the customer decides to discontinue the services after their start.<br />Promotional airfare and package deals may experience delays or changes in flight days and times. To prevent such situations, it is recommended to purchase travel tickets or packages at least 30 days in advance.",
    'privacidade_alteracoes'             :'Itinerary Changes',
    'privacidade_alteracoes_texto'       :'We may make changes to itineraries, dates, or other travel details due to unforeseen circumstances, such as the service purchase mode or to ensure passenger safety.',
    'privacidade_responsabilidades'      :'Responsibilities and Limitations',
    'privacidade_responsabilidades_texto':'We are not liable for delays, losses, damages, or expenses resulting from circumstances beyond our control, such as flight cancellations, border closures, or extreme weather conditions.',
    'privacidade_aceitacao'              :'Acceptance of Terms',
    'privacidade_aceitacao_texto'        :'By using our services, you agree to the terms and conditions outlined in this document.',

    'contato_titulo'    :'Contact us',
    'contato_subtitulo' :'Do you have any doubts? Contact us.',
    'contato_enviar'    :'Send Message',
    'contato_whats'     :'Contact WhatsApp',
    'contato_sac'       :'Whatsapps from SAC',
    'contato_email'     :'Contact e-mail',
    'contato_horario'   :'Contact time',
    'contato_segasex'   :'Monday to Friday',

    'rodape_help'  :'Can we help you?',
    'rodape_whats' :'Get in touch via Whatsapp',
    'rodape_siga'  :'Follow us on social media!',
    'rodape_copy'  :'All rights reserved',
  },
  'pt-br': {
    'menuhome'        :'Home',
    'menuservicos'    :'Nossos Serviços',
    'menuempresa'     :'Quem Somos',
    'menuprivacidade' :'Política de privacidade',
    'menucontato'     :'Contato',

    'home_ajuda' :'Te ajudamos a fazer da sua viajem um momento inesquecível!',
    'home_realizar' :'Realizar viagens com serviços completos, sem precisar se preocupar com passagens, reserva de hotéis, traslado e outras questões burocráticas? Com a <b>Embarque Ideal</b> isso é possível.',
    'home_escolha' :'A escolha do seu destino',
    'home_descubra' :'Descubra seu destino ideal com nosso suporte personalizado. Transforme sonhos em roteiros inesquecíveis!',
    'home_compras' :'Compras das suas passagens',
    'home_garanta' :'Garanta viagens sem complicações! Nossa agência cuida das passagens para você viajar com tranquilidade e conforto.',
    'home_opcoes' :'Milhares de opções para viajar',
    'home_milhares' :'Escolha entre milhares opções de destinos e hotéis o de sua preferência. Se precisar de ajuda, solicite um orçamento!',
    'home_rolando' :'O que tá rolando <span>no Instagram?</span>',
    'home_siga' :'Siga pra não perder as novidades',
    'home_depoimentos' :'Depoimentos',
    'home_depoimentos_texto' :'O que nossos clientes estão dizendo',
    'home_servicos' :'Serviços incríveis',

    'form_origem'      :'Origem*',
    'form_destino'     :'Destino*',
    'form_data_ida'    :'Data de ida*',
    'form_data_volta'  :'Data de volta',
    'form_passageiros' :'Passageiros*',
    'form_nome'        :'Nome*',
    'form_tel'         :'Telefone*',
    'form_hora'        :'Horário pra contato',
    'form_enviar'      :'Solicitar Orçamento',
    
    'servicos_titulo'           :'Nossos serviços',
    'servicos_subtitulo'        :'Passagens Aéreas e Rodoviárias',
    'servicos_passaerea'        :'<b>Passagens Aéreas:</b> a cotação pode ser feita tanto território nacional e internacional mas sempre com um valor mais em conta e a passagem é entregue 24 horas antes do seu voo.',
    'servicos_passrod'          :'<b>Passagens rodoviárias:</b> a cotação pode ser realizada para o território nacional e para os países dentro da América do Sul.',
    'servicos_formaspagamento'  :'<b>As formas de pagamento são:</b><br>- Via Pix com 5% de desconto<br>- Cartão de crédito em até 6x sem juros',
    'servicos_desconto'         :'Desconto no Pix',
    'servicos_desconto_texto'   :'Aceitamos pagamento no Pix e lhe damos 5% de deconto caso escolha essa forma de pagamento.',
    'servicos_parcele'          :'Parcele no cartão',
    'servicos_parcele_texto'    :'Parcelamos sua compra em até 6x sem juros para pagamento no cartão de crédito.',
    'servicos_entrega'          :'Entrega digital',
    'servicos_entrega_texto'    :'Passagens entregue completamente de forma digital trazendo facilidade e comodidade.',
    'servicos_hospedagem'       :'Hospedagem',
    'servicos_hospedagem_texto' :'Como prezamos muito pela qualidade de nossas indicações, sempre recomendamos as acomodações com as melhores avaliações e com facilidade de locomoção dentro do seu destino.',
    'servicos_assessoria'       :'Assessoria',
    'servicos_assessoria_texto' :'Morar fora do Brasil não é uma tarefa fácil! Nós te auxiliamos e te acompanhamos desde a emissão de toda documentação até a sua chegada no país desejado.',
    'servicos_seguro'           :'Seguro viagem',
    'servicos_seguro_texto'     :'Imprevistos podem acontecer, e por isso para viagens internacionais ou até mesmo nacionais, recomendamos sempre o seguro para uma viagem mais tranquila.',
    'servicos_perguntas'        :'Perguntas frequentes',
    'servicos_duvidas'          :'Dúvidas gerais',
    'servicos_pergunta1'        :'Depois de comprar a minha passagem aérea em quanto tempo a minha passagem fica disponível?',
    'servicos_resp1'            :'Depende da modalidade de compra, se for por milhagem o localizador é entregue junto ao check in em até 48 horas antes do embarque mas se for por pontuação a sua passagem é completamente entregue em até 24 horas úteis.',
    'servicos_pergunta2'        :'Quando eu compro a minha passagem de ônibus, o meu bilhete fica disponível na hora?',
    'servicos_resp2'            :'Sim! No ato da compra da sua passagem, já emitimos a sua passagem.',
    'servicos_pergunta3'        :'Quais é os principais canais de atendimento?',
    'servicos_resp3'            :'Praticidade é o nosso sobrenome, então sempre estamos disponíveis em nossos canais de atendimento via WhatsApp, mas caso você queira fazer contato em outras redes estamos disponíveis em nosso Instagram ou Facebook (@embarqueideal).',
    'servicos_pergunta4'        :'Vocês possuem uma loja física?',
    'servicos_resp4'            :'Não, apenas atuamos de forma online pelos canais de atendimento que informei na pergunta anterior.',
    'servicos_pergunta5'        :'Vocês possuem licença para atuar?',
    'servicos_resp5'            :'Com certeza! Nós temos autorização do Cadastur que é o documento gerado pelo ministério do Turismo que garante que temos autorização do governo para atuar como uma agência.',
    'servicos_pergunta6'        :'Quais são as formas de pagamento de vocês?',
    'servicos_resp6'            :'Via pix com 5% de desconto, parcelamento via pix/boleto e cartão de crédito em até 3 vezes sem juros.',
    'servicos_pergunta7'        :'Quando eu fecho um pacote, é emitido algum tipo de comprovante?',
    'servicos_resp7'            :'Sim! Assim que você formaliza a sua viagem nós te encaminhamos o contrato com todas as informações combinadas e a assinatura é feita de forma digital, ou seja, de onde você estiver, estaremos a disposição para te atender.',

    'empresa_titulo'         :'Quem Somos',
    'empresa_subtitulo'      :'Nós somos a Embarque Ideal, uma agência de viagens focada em explorar o mundo e proporcionar momentos inesquecíveis a todos os tipos de viajantes, independente de onde estiver.',
    'empresa_objetivo'       :'<i class="fa-solid fa-ranking-star"></i> Objetivo',
    'empresa_objetivo_texto' :'O nosso objetivo é facilitar e tornar mais acessível a experiência de viajar para os nossos clientes, atuando como intermediadora entre eles e os diversos serviços que podemos nos proporcionar.',
    'empresa_missao'         :'<i class="fa-solid fa-rocket"></i> Missão',
    'empresa_missao_texto'   :'Nossa missão é tornar sonhos em realidade, conectando pessoas aos seus destinos e proporcionar uma experiência inesquecível.',
    'empresa_valores'        :'<i class="fa-solid fa-handshake-angle"></i> Valores',
    'empresa_valores_texto1' :'<i class="fa-solid fa-heart"></i> <b>Paixão por viagens:</b> demonstramos entusiasmo e amor pelo mundo das viagens, compartilhando esse entusiasmo com os clientes e colegas.',
    'empresa_valores_texto2' :'<i class="fa-solid fa-glasses"></i> <b>Transparência:</b> oferecemos um atendimento personalizado e com total transparência e clareza sobre todas as informações sobre a sua viagem.',
    'empresa_valores_texto3' :'<i class="fa-solid fa-person-chalkboard"></i> <b>Adaptabilidade:</b> estamos em constante evolução para garantir que os nossos clientes sempre tenham a melhor experiência.',
    'empresa_valores_texto4' :'<i class="fa-solid fa-building-lock"></i> <b>Segurança:</b> garantimos que as viagens sejam planejadas levando em consideração a segurança dos nossos clientes, em todos os aspectos.',
    'empresa_valores_texto5' :'<i class="fa-solid fa-people-group"></i> <b>Equipe dedicada:</b> mater um ambiente de trabalho colaborativo e motivador, onde os funcionários estejam comprometidos em proporcionar experiências incríveis aos clientes.',
    
    'privacidade_titulo'                 :'Política de Privacidade',
    'privacidade_subtitulo'              :'A agência Embarque Ideal está comprometida em proteger a privacidade e a segurança das informações pessoais de seus clientes e visitantes.<br />Esta Política de Privacidade descreve como coletamos, usamos, compartilhamos e protegemos suas informações pessoais.<br />Ao utilizar nossos serviços, você concorda com os termos desta política.',
    'privacidade_coleta'                 :'Coleta de Informações Pessoais',
    'privacidade_coleta_texto'           :'Coletamos informações pessoais, como nome completo, data de nascimento, cadastro de pessoa física, endereço residencial completo, registro geral, número do passaporte, endereço de e-mail, número de telefone, informações de pagamento e preferências de viagem, quando você reserva nossos serviços ou interage conosco por meio do nosso site, aplicativo ou outros canais.',
    'privacidade_uso'                    :'Uso de Informações Pessoais',
    'privacidade_uso_texto'              :'Utilizamos suas informações pessoais para processar reservas, fornecer informações sobre viagens, melhorar nossos serviços, personalizar experiências de viagem e responder às suas solicitações. Também podemos usar suas informações para fins de marketing, desde que você tenha consentido para isso.',
    'privacidade_compartilhamento'       :'Compartilhamento de Informações',
    'privacidade_compartilhamento_texto' :'Compartilhamos suas informações pessoais com parceiros de viagem, fornecedores de serviços e terceiros necessários para processar suas reservas e garantir a entrega dos serviços contratados. Não vendemos, alugamos ou divulgamos suas informações pessoais a terceiros para fins de marketing sem seu consentimento.',
    'privacidade_seguranca'              :'Segurança de Dados',
    'privacidade_seguranca_texto'        :'Implementamos medidas de segurança para proteger suas informações pessoais contra acesso não autorizado, alteração, divulgação ou destruição. No entanto, a transmissão de dados pela internet não é completamente segura, e não podemos garantir a segurança de informações transmitidas online.',
    'privacidade_cookies'                :'Cookies e Tecnologias Similares',
    'privacidade_cookies_texto'          :'Utilizamos cookies e tecnologias similares para melhorar a experiência do usuário, analisar tendências e administrar o site. Você pode optar por não aceitar cookies, mas isso pode afetar a funcionalidade do site.',
    'privacidade_direitos'               :'Seus Direitos',
    'privacidade_direitos_texto'         :'Você tem o direito de acessar, corrigir ou excluir suas informações pessoais. Também pode optar por não receber comunicações de marketing a qualquer momento. Entre em contato conosco para exercer esses direitos.',
    'privacidade_termos'                 :'Termos de Serviço',
    'privacidade_reservas'               :'Reservas e Pagamentos',
    'privacidade_reservas_texto'         :'Ao reservar nossos serviços, você concorda em fornecer informações precisas e completas. Os pagamentos devem ser feitos de acordo com as políticas de pagamento específicas de cada serviço.<br />Reservamo-nos o direito de cancelar ou recusar serviços devido a informações incorretas ou pagamentos não autorizados.',
    'privacidade_cancelamentos'          :'Cancelamentos e Reembolsos',
    'privacidade_cancelamentos_texto'    :'As políticas de cancelamento e reembolso variam de acordo com os serviços reservados. É importante ler e entender essas políticas antes de confirmar a reserva.<br />O cancelamento dos serviços contratados, efetuado pelo contratante por questões de preferência de companhia aérea específica, por questões de milhagens ou alterações na data e vôo, terão os valores estornados em até 60 dias.<br />Após iniciada a viagem, não haverá devolução de valores pagos caso o contratante desista da continuidade do fluxo da prestação de serviços, em qualquer fase ou etapa após o seu início.<br />As viagens e pacotes aéreos com preços promocionais, poderão sofrer atraso e/ou alteração nos dias e horários de seus respectivos vôos. Para previnir tais situações, recomenda-se a aquisição do bilhete de viagem ou do pacote de viagem com pelo menos 30 dias de antecedência.',
    'privacidade_alteracoes'             :'Alterações de Itinerário',
    'privacidade_alteracoes_texto'       :'Podemos fazer alterações em itinerários, datas ou outros detalhes das viagens devido a circunstâncias imprevistas como por exemplo a modalidade de compra do serviço ou para garantir a segurança dos passageiros.',
    'privacidade_responsabilidades'      :'Responsabilidades e Limitações',
    'privacidade_responsabilidades_texto':'Não nos responsabilizamos por atrasos, perdas, danos ou despesas resultantes de circunstâncias fora de nosso controle, como cancelamentos de voos, fechamento de fronteiras ou condições climáticas extremas.',
    'privacidade_aceitacao'              :'Aceitação dos Termos',
    'privacidade_aceitacao_texto'        :'Ao utilizar nossos serviços, você concorda com os termos e condições estabelecidos neste documento.',

    'contato_titulo'    :'Fale Conosco',
    'contato_subtitulo' :'Você tem alguma dúvida? Entre em contato conosco.',
    'contato_enviar'    :'Enviar mensagem',
    'contato_whats'     :'Whatsapps de contato',
    'contato_sac'       :'Whatsapps de SAC',
    'contato_email'     :'Email de contato',
    'contato_horario'   :'Horário de contato',
    'contato_segasex'   :'Segunda a Sexta',

    'rodape_help'  :'Podemos te ajudar?',
    'rodape_whats' :'Entre em contato pelo Whatsapp',
    'rodape_siga'  :'Siga a gente nas redes sociais!',
    'rodape_copy'  :'Todos os direitos reservados',
  }
};

var tradutor = $('.translate-'+DEFAULT_LANG).html();

const translate = (lang = null) => {
  if (lang === null) {
    lang = DEFAULT_LANG;
  }
  let DEFAULT_LANG_LENGTH = Object.keys(TRANSLATIONS[DEFAULT_LANG]).length;
  // Verifica se o idioma selecionado existe.
  if (TRANSLATIONS[lang]) {
    sessionStorage.setItem('language', lang);
    $(".lang-name").html(tradutor)
    // Existe... Agora verifica se a tradução selecionada está completa
    // Se não estiver exibe a mensagem.
    ALERT_TRANSLATION_UNAVAILABLE.style.display = 'none';
    let LANG_LENGTH = Object.keys(TRANSLATIONS[lang]).length;
    if (LANG_LENGTH < DEFAULT_LANG_LENGTH) {
      ALERT_TRANSLATION_INCOMPLETE.style.display = 'block';
    } else {
      ALERT_TRANSLATION_INCOMPLETE.style.display = 'none';
    }
    DATA_LANG_ELEMENTS.forEach((el) => {
      let STR = el.getAttribute('data-lang-str');

      if (TRANSLATIONS[lang][STR]) {
        el.innerHTML = (TRANSLATIONS[lang][STR]);
      }
    });
  } else {
    // Não existe, então exibe a mensagem
    ALERT_TRANSLATION_INCOMPLETE.style.display = 'none';
    ALERT_TRANSLATION_UNAVAILABLE.style.display = 'block';
  }
}

let BTNS_TRANSLATE = document.querySelectorAll('[name=btn-translate]');
BTNS_TRANSLATE.forEach((btn) => {
  btn.addEventListener('click', (ev) => {
    translate(btn.getAttribute('data-lang'));
  });
});

translate();