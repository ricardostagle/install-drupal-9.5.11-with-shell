#!/bin/bash

cd dpl9-app && lando destroy -y && cd .. && rm -rf dpl9-app/web/core && rm -rf dpl9-app/web/themes && rm -rf dpl9-app/web/sites && rm -rf dpl9-app/web/profiles && rm -rf dpl9-app/web/modules/contrib && rm -rf dpl9-app/vendor