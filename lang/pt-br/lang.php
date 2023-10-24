<?php

return [

    'plugin' => [
        'name' => 'Reservas',
        'category' => 'Reservas',
        'description' => 'Plug-in de reservas rápidas.',
        'menu_label' => 'Reservas',
    ],

    'permission' => [
        'tab_label' => 'Reservas',
        'reservations' => 'Gerenciamento de reservas',
        'statuses' => 'Gerenciamento de status',
        'export' => 'Exportação de reservas',
    ],

    'reservations' => [
        'menu_label' => 'Reservas',
        'widget_label' => 'Reservas',
        'bulk_actions' => 'Ações em massa',
        'approved' => 'Aprovar',
        'approved_question' => 'Tem certeza de que deseja alterar as reservas para Aprovadas?',
        'closed' => 'Fechada',
        'closed_question' => 'Tem certeza de que deseja alterar as reservas para Fechadas?',
        'received' => 'Recebida',
        'received_question' => 'Tem certeza de que deseja alterar as reservas para Recebidas?',
        'cancelled' => 'Cancelada',
        'cancelled_question' => 'Tem certeza de que deseja alterar as reservas para Canceladas?',
        'delete' => 'Excluida',
        'delete_question' => 'Tem certeza de que deseja excluir as reservas selecionadas?',
        'change_status_success' => 'Os estados de reserva foram alterados com sucesso.',
    ],

    'reservation' => [
        'date' => 'Data',
        'time' => 'Hora',
        'date_format' => 'd.m.Y H:i:s',
        'name' => 'Nome',
        'email' => 'Email',
        'phone' => 'Telefone',
        'status' => 'Status',
        'created_at' => 'Criado em',
        'created_at_format' => 'd.m.Y H:i:s',
        'street' => 'Endereço / Rua',
        'message' => 'Mensagem',
        'number' => 'Numero',
        'returning' => 'Retornando',
        'submit' => 'Enviar',
    ],

    'statuses' => [
        'menu_label' => 'Statuses',
        'change_order' => 'Mudar ordem',
    ],

    'status' => [
        'name' => 'Status',
        'color' => 'Cor',
        'ident' => 'Ident',
        'order' => 'Sort order',
        'enabled' => 'Enabled',
        'created' => 'Created',
        'created_format' => 'd.m.Y H:i:s',
        'updated' => 'Updated',
        'updated_format' => 'd.m.Y H:i:s',
    ],

    'export' => [
        'menu_label' => 'Exportar',
        'status_filter' => 'Filtrar por status',
        'status_filter_label' => 'Status',
        'status_filter_tab' => 'Status',
    ],

    'reservationform' => [
        'name' => 'Formulário de reserva',
        'description' => 'Formulário para receber reservas em Data/hora específicas.',
        'success' => 'A reserva foi enviada com sucesso!',
    ],

    'mail' => [
        'cs_label' => 'Reservation confirmation CS',
        'en_label' => 'Reservation confirmation EN',
        'es_label' => 'Reservation confirmation ES',
        'fr_label' => 'Reservation confirmation FR',
        'ru_label' => 'Reservation confirmation RU',
        'pt-br_label' => 'Reservation confirmation PT-BR',
    ],

    'errors' => [
        'empty_date' => 'Você deve selecionar a data!',
        'empty_hour' => 'Você deve selecionar a hora!',
        'please_wait' => 'Você pode enviar apenas uma reserva a cada 30 segundos. Aguarde um momento.',
        'session_expired' => 'A sessão do formulário expirou! Atualize a página.',
        'exception' => 'Lamentamos, mas algo deu errado e o formulário não pode ser enviado.',
        'already_booked' => 'Data :reservation já está agendada',
        'days_off' => 'A data selecionada é dia de folga.',
        'out_of_hours' => 'O horário selecionado está fora de horário.',
        'past_date' => 'A data selecionada já passou.',
    ],

    'settings' => [
        'description' => 'Gerenciar configurações de reservas.',
        'tabs' => [
            'plugin'  => 'Configurações de Reservas',
            'admin'   => 'Confirmação do administrador',
            'datetime' => 'Configurações de data e hora',
            'returning' => 'Pessoas recorrentes',
            'working_days' => 'Dias úteiss',
        ],

        'returning_mark' => [
            'label'   => 'Marcar clientes recorrentes',
            'comment' => 'Marque clientes com esse número de reservas ou mais. Desabilitar pelo valor 0.',
        ],
        'admin_confirmation_enable' => [
            'label'   => 'Habilitar confirmação do administrador',
        ],
        'admin_confirmation_email' => [
            'label'   => 'E-mail do administrador',
            'comment' => 'E-mail do administrador para envio de confirmação.',
        ],
        'admin_confirmation_name' => [
            'label'   => 'Nome do Administrador',
            'comment' => 'Nome do administrador para e-mail de confirmação.',
        ],
        'admin_confirmation_locale' => [
            'label'   => 'Confirmação do administrador \'locale\'',
            'comment' => '\'Locale\' da confirmação do administrador.',
        ],
        'reservation_interval' => [
            'label'   => 'Slot de intervalo de reservas (minuto)',
            'comment' => 'Usado para selecionador de horário do formulário de reserva.',
        ],
        'reservation_length' => [
            'label'   => 'Duração de uma reserva',
            'comment' => 'Quanto tempo leva uma reserva.',
        ],
        'reservation_length_unit' => [
            'options' => [
                'minutes' => 'minutos',
                'hours' => 'horas',
                'days' => 'dias',
                'weeks' => 'semanas',
            ],
        ],
        'formats_date' => [
            'label'   => 'Formato de data',
            'comment' => 'Você pode usar: d, dd, ddd, dddd, m, mm, mmm, mmmm, yy, yyyy, Y',
        ],
        'formats_time' => [
            'label'   => 'Formato de Hora',
            'comment' => 'Você pode usar: h, hh, H, HH, i, a, A',
        ],
        'first_weekday' => [
            'label'   => 'O primeiro dia da semana é segunda-feira?',
        ],
        'work_time_from' => [
            'label'   => 'Comece a trabalhar a partir',
            'comment' => 'Formato de hora HH:mm (formato de 24 horas)',
        ],
        'work_time_to' => [
            'label'   => 'Termine o trabalho em',
            'comment' => 'Formato de hora HH:mm (formato de 24 horas)',
        ],
        'work_days' => [
            'label'   => 'Dias úteis',
            'monday'    => 'Segunda',
            'tuesday'   => 'Terça',
            'wednesday' => 'Quarta',
            'thursday'  => 'Quinta',
            'friday'    => 'Sexta',
            'saturday'  => 'Sábado',
            'sunday'    => 'Domingo',
        ],
    ],
];
