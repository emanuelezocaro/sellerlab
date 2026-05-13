<?php
/**
 * Render a full marketplace or tool card from a data array.
 * Used by all section pages (marketplace/* and tools/*).
 */
function render_card(array $item): void {
    $id      = htmlspecialchars($item['id']);
    $name    = htmlspecialchars($item['name']);
    $domain  = htmlspecialchars($item['domain'] ?? '');
    $type    = htmlspecialchars($item['type'] ?? '');
    $desc    = $item['desc'] ?? '';          // may contain <strong>/<br>
    $metrics = $item['metrics'] ?? [];
    $pros    = $item['pros'] ?? [];
    $cons    = $item['cons'] ?? [];
    $tags    = $item['tags'] ?? [];
    $badges  = $item['badges'] ?? [];

    $favicon = $domain
        ? "https://www.google.com/s2/favicons?domain={$domain}&sz=64"
        : '';

    echo "<div class=\"card\" id=\"{$id}\">\n";

    // Header: icon + badges
    echo "  <div class=\"card-header\">\n";
    if ($favicon) {
        echo "    <div class=\"card-icon\"><img src=\"{$favicon}\" alt=\"{$name}\" width=\"28\" height=\"28\"></div>\n";
    }
    if ($badges) {
        echo "    <div>\n";
        $first = true;
        foreach ($badges as $badge) {
            $color = htmlspecialchars($badge['color'] ?? 'blue');
            $text  = htmlspecialchars($badge['text']);
            $style = $first ? ' style="margin-bottom:4px;display:block;"' : '';
            echo "      <span class=\"badge badge-{$color}\"{$style}>{$text}</span>\n";
            $first = false;
        }
        echo "    </div>\n";
    }
    echo "  </div>\n";

    // Name + type
    echo "  <div class=\"card-name\" style=\"margin:12px 0 4px;\">{$name}</div>\n";
    if ($type) {
        echo "  <div class=\"card-type\">{$type}</div>\n";
    }

    // Description
    if ($desc) {
        echo "  <div class=\"card-desc\" style=\"margin-top:10px;\">{$desc}</div>\n";
    }

    // Metrics
    if ($metrics) {
        echo "  <div class=\"metrics\">\n";
        foreach ($metrics as $m) {
            $label = htmlspecialchars($m['label']);
            $value = htmlspecialchars($m['value']);
            echo "    <div class=\"metric\"><div class=\"metric-label\">{$label}</div><div class=\"metric-value\">{$value}</div></div>\n";
        }
        echo "  </div>\n";
    }

    // Pros & cons
    if ($pros || $cons) {
        echo "  <div class=\"pros-cons\">\n";
        if ($pros) {
            echo "    <div class=\"pros\"><h4>Punti di forza</h4><ul>\n";
            foreach ($pros as $p) echo "      <li>" . htmlspecialchars($p) . "</li>\n";
            echo "    </ul></div>\n";
        }
        if ($cons) {
            echo "    <div class=\"cons\"><h4>Punti di debolezza</h4><ul>\n";
            foreach ($cons as $c) echo "      <li>" . htmlspecialchars($c) . "</li>\n";
            echo "    </ul></div>\n";
        }
        echo "  </div>\n";
    }

    // Tags
    if ($tags) {
        echo "  <div class=\"tags\">\n";
        foreach ($tags as $t) echo "    <span class=\"tag\">" . htmlspecialchars($t) . "</span>\n";
        echo "  </div>\n";
    }

    echo "</div>\n";
}

/**
 * Render a hub category card (used on marketplace.php and tools.php).
 */
function render_hub_card(array $cat, string $base_url, string $path_prefix = ''): void {
    $slug  = htmlspecialchars($cat['slug']);
    $label = htmlspecialchars($cat['label']);
    $desc  = htmlspecialchars($cat['desc']);
    $count = (int)($cat['items_count'] ?? 0);
    $range = htmlspecialchars($cat['commission_range'] ?? $cat['price_range'] ?? '');
    $h2    = htmlspecialchars($cat['h2'] ?? $label);

    // Featured names: pick first 3 from data if available
    $featured_names = [];
    if (!empty($cat['featured'])) {
        foreach (array_slice($cat['featured'], 0, 3) as $fid) {
            $featured_names[] = $fid; // caller can pass display names via featured_labels
        }
    }
    $featured_str = htmlspecialchars($cat['featured_str'] ?? implode(', ', $cat['featured'] ?? []));

    $url = $path_prefix . $base_url . '-' . $slug . '.php';

    echo "<a href=\"{$url}\" class=\"card card-link\" style=\"text-decoration:none;\">\n";
    echo "  <div class=\"section-label\">{$label}</div>\n";
    echo "  <h2 style=\"font-size:20px;margin:8px 0 6px;\">{$h2}</h2>\n";
    echo "  <p style=\"color:var(--text-secondary);font-size:14px;margin:0 0 16px;\">{$desc}</p>\n";
    echo "  <div style=\"display:flex;gap:8px;flex-wrap:wrap;\">\n";
    if ($count) echo "    <span class=\"badge badge-blue\">{$count} " . ($count === 1 ? 'voce' : 'voci') . "</span>\n";
    if ($range) echo "    <span class=\"badge badge-orange\">{$range}</span>\n";
    echo "  </div>\n";
    echo "  <div style=\"margin-top:16px;font-size:13px;font-weight:600;color:var(--accent);\">Scopri →</div>\n";
    echo "</a>\n";
}
