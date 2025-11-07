<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice {{ $invoice->invoice_number }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #1e293b;
            padding: 40px;
            background: #f8fafc;
        }

        .invoice-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 60px;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: start;
            margin-bottom: 60px;
            padding-bottom: 30px;
            border-bottom: 3px solid #2563eb;
        }

        .logo {
            font-size: 32px;
            font-weight: 700;
            color: #1e40af;
        }

        .invoice-details {
            text-align: right;
        }

        .invoice-number {
            font-size: 24px;
            font-weight: 700;
            color: #1e40af;
            margin-bottom: 10px;
        }

        .invoice-date {
            color: #64748b;
            font-size: 14px;
        }

        .billing-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .billing-section h3 {
            font-size: 14px;
            font-weight: 600;
            color: #64748b;
            text-transform: uppercase;
            margin-bottom: 15px;
            letter-spacing: 0.5px;
        }

        .billing-section p {
            margin-bottom: 5px;
            color: #475569;
        }

        .billing-section .company-name {
            font-weight: 600;
            color: #1e293b;
            font-size: 16px;
            margin-bottom: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 40px 0;
        }

        thead {
            background-color: #f1f5f9;
        }

        thead th {
            padding: 15px;
            text-align: left;
            font-size: 14px;
            font-weight: 600;
            color: #475569;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        thead th:last-child {
            text-align: right;
        }

        tbody td {
            padding: 20px 15px;
            border-bottom: 1px solid #e2e8f0;
        }

        tbody td:last-child {
            text-align: right;
            font-weight: 600;
        }

        .item-description {
            color: #1e293b;
            font-weight: 500;
            margin-bottom: 4px;
        }

        .item-details {
            color: #64748b;
            font-size: 14px;
        }

        .totals {
            margin-left: auto;
            width: 350px;
            margin-top: 40px;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
        }

        .total-row.subtotal {
            color: #475569;
        }

        .total-row.discount {
            color: #10b981;
        }

        .total-row.tax {
            color: #475569;
        }

        .total-row.total {
            border-top: 2px solid #e2e8f0;
            margin-top: 15px;
            padding-top: 20px;
            font-size: 20px;
            font-weight: 700;
            color: #1e40af;
        }

        .status-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-paid {
            background-color: #dcfce7;
            color: #166534;
        }

        .status-pending {
            background-color: #fef3c7;
            color: #92400e;
        }

        .status-overdue {
            background-color: #fee2e2;
            color: #991b1b;
        }

        .footer {
            margin-top: 60px;
            padding-top: 30px;
            border-top: 1px solid #e2e8f0;
            text-align: center;
            color: #64748b;
            font-size: 14px;
        }

        .footer p {
            margin-bottom: 8px;
        }

        .print-button {
            position: fixed;
            top: 20px;
            right: 20px;
            background: #2563eb;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .print-button:hover {
            background: #1d4ed8;
        }

        @media print {
            body {
                padding: 0;
                background: white;
            }

            .invoice-container {
                box-shadow: none;
                padding: 40px;
            }

            .print-button {
                display: none;
            }
        }
    </style>
</head>
<body>
    <button class="print-button" onclick="window.print()">Print / Download PDF</button>

    <div class="invoice-container">
        <!-- Header -->
        <div class="header">
            <div class="logo">GrowPath AI</div>
            <div class="invoice-details">
                <div class="invoice-number">{{ $invoice->invoice_number }}</div>
                <div class="invoice-date">
                    Issue Date: {{ $invoice->issue_date->format('F d, Y') }}
                </div>
                @if($invoice->due_date)
                <div class="invoice-date">
                    Due Date: {{ $invoice->due_date->format('F d, Y') }}
                </div>
                @endif
                <div style="margin-top: 15px;">
                    <span class="status-badge status-{{ $invoice->status }}">
                        {{ ucfirst($invoice->status) }}
                    </span>
                </div>
            </div>
        </div>

        <!-- Billing Information -->
        <div class="billing-info">
            <div class="billing-section">
                <h3>From</h3>
                <p class="company-name">GrowPath AI CRM</p>
                <p>Email: support@growpath.com</p>
                <p>Phone: +1 (555) 123-4567</p>
            </div>

            <div class="billing-section">
                <h3>Bill To</h3>
                @if($invoice->billing_details)
                    <p class="company-name">{{ $invoice->billing_details['name'] ?? '' }}</p>
                    <p>{{ $invoice->billing_details['email'] ?? '' }}</p>
                    @if(isset($invoice->billing_details['company']))
                    <p>{{ $invoice->billing_details['company'] }}</p>
                    @endif
                @else
                    <p class="company-name">{{ $invoice->user->name }}</p>
                    <p>{{ $invoice->user->email }}</p>
                @endif
            </div>
        </div>

        <!-- Line Items -->
        <table>
            <thead>
                <tr>
                    <th>Description</th>
                    <th style="text-align: center;">Quantity</th>
                    <th style="text-align: right;">Unit Price</th>
                    <th style="text-align: right;">Total</th>
                </tr>
            </thead>
            <tbody>
                @if($invoice->line_items)
                    @foreach($invoice->line_items as $item)
                    <tr>
                        <td>
                            <div class="item-description">{{ $item['description'] ?? 'Subscription' }}</div>
                            @if(isset($item['details']))
                            <div class="item-details">{{ $item['details'] }}</div>
                            @endif
                        </td>
                        <td style="text-align: center;">{{ $item['quantity'] ?? 1 }}</td>
                        <td style="text-align: right;">${{ number_format($item['unit_price'] ?? 0, 2) }}</td>
                        <td style="text-align: right;">${{ number_format($item['total'] ?? 0, 2) }}</td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td>
                            <div class="item-description">{{ $invoice->subscription->plan->name ?? 'Subscription' }} - Monthly</div>
                            <div class="item-details">Subscription Period: {{ $invoice->issue_date->format('M d') }} - {{ $invoice->due_date?->format('M d, Y') }}</div>
                        </td>
                        <td style="text-align: center;">1</td>
                        <td style="text-align: right;">${{ number_format($invoice->total, 2) }}</td>
                        <td style="text-align: right;">${{ number_format($invoice->total, 2) }}</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <!-- Totals -->
        <div class="totals">
            @if($invoice->subtotal)
            <div class="total-row subtotal">
                <span>Subtotal</span>
                <span>${{ number_format($invoice->subtotal, 2) }}</span>
            </div>
            @endif

            @if($invoice->discount && $invoice->discount > 0)
            <div class="total-row discount">
                <span>Discount</span>
                <span>-${{ number_format($invoice->discount, 2) }}</span>
            </div>
            @endif

            @if($invoice->tax && $invoice->tax > 0)
            <div class="total-row tax">
                <span>Tax</span>
                <span>${{ number_format($invoice->tax, 2) }}</span>
            </div>
            @endif

            <div class="total-row total">
                <span>Total</span>
                <span>${{ number_format($invoice->total, 2) }} {{ strtoupper($invoice->currency ?? 'USD') }}</span>
            </div>

            @if($invoice->paid_date)
            <div class="total-row" style="color: #10b981; font-weight: 600; margin-top: 15px;">
                <span>Paid on {{ $invoice->paid_date->format('M d, Y') }}</span>
                <span>✓</span>
            </div>
            @endif
        </div>

        <!-- Footer -->
        <div class="footer">
            <p><strong>Thank you for your business!</strong></p>
            <p>GrowPath AI CRM - Your Partner in Customer Relationship Management</p>
            <p>For questions about this invoice, contact support@growpath.com</p>
        </div>
    </div>
</body>
</html>
