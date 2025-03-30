<template>
    <div>
        <Header @status="status" />

        <div class="d-flex">
            <Menu :isCloseN="isClose" />
            <div>
                <div class="d-flex">
                    <div>
                        <InfoSection />
                    </div>
                    <div>
                        <home-report />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Header from '../components/header/Header.vue';
import InfoSection from '../components/info-section/InfoSection.vue';
import Menu from '../components/menu/menu.vue';
import HomeReport from '../components/reports/tabs/HomeReport.vue';
export default {
    data() {
        return {
            isClose: false
        }
    }
    , components: {
        Menu,
        Header,
        InfoSection,
        HomeReport

    },
    methods: {
        status(newStatus) {
            console.log(" eSTADO EB EL HOME", newStatus)
            this.isClose = newStatus;;
            console.log(this.isClose)
        }
    }
}
</script>
